<?php namespace App\Modules\Frontend\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Validator;
use Auth;
use App\Models\Customer;
use Illuminate\Http\Request;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;


	protected $validator;
	protected $redirectPath = 'admin/dashboard';
	protected $loginPath = 'admin/login';
	protected $redirectAfterLogout = "admin/login";


	public function __construct( Registrar $registrar)
	{
		// $this->auth = $auth;
		$this->auth = Auth::client();
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
						'username' => 'required',
//           'password' => 'required|min:6|confirmed',
						'password' => 'required|min:3|confirmed',
						'password_confirmation' => 'required|min:3',
        ]);
    }

	/**
	 * Show the application login form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getLogin()
	{
		return view('Frontend::auth.login');
	}

	/**
	 * Handle a login request to the application.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function postLogin(Request $request)
	{
		// $this->validate($request, [
		// 	'email' => 'required|email', 'password' => 'required',
		// ]);
		// Customize Login
		$this->validate($request, [
			'login' => 'required', 'password' => 'required',
		]);

		// $credentials = $request->only('username', 'password');
		$filter = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
		$request->merge([$filter => $request->input('login') ]);
		$credentials = $request->only($filter, 'password');

		if ($this->auth->attempt($credentials, $request->has('remember')))
		{
			$tour_id = $this->auth->get()->tour_id;
			// return redirect()->route();
			dd($tour_id);
		}

		return redirect($this->loginPath())
					->withInput($request->only('login', 'remember'))
					->withErrors([
						'error' => $this->getFailedLoginMessage(),
					]);
	}

	/**
	 * Get the failed login message.
	 *
	 * @return string
	 */
	protected function getFailedLoginMessage()
	{
		return 'Username/email hoặc password không chính xác';
	}

	/**
	 * Log the user out of the application.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getLogout()
	{
		$this->auth->logout();
		return redirect()->route('home');
	}
