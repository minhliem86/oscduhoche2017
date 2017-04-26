<?php namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Hash;
use Auth;
use Validator;
use Notification;

class AdminController extends Controller {

	public function __construct(){
		$this->auth = Auth::admin();
		$this->middleware('checkLogin');
	}


	protected function validator(array $data)
    {
        return Validator::make($data, [
          'name' => 'required|max:255',
          'email' => 'required|email|max:255|unique:users',
					'password' => 'required|min:3|confirmed',
					'password_confirmation' => 'required|min:3',
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

	public function index()
	{
		return view('Admin::pages.dashboard.index');
	}

	public function getChangePass(){
		return view('Admin::auth.changepass');
	}

	public function postChangePass(Request $request){
		$oldpass = $request->input('oldpassword');
		if(Hash::check($oldpass, $this->auth->get()->password)){
			$validator = Validator::make($request->all(),[
				'newpassword' => 'required|confirmed|min:6',
			]);
			if($validator->fails()){
				return redirect()->back()->withErrors('Not match New Password!');
			}else{
				$user = $this->auth->get();
				$user->password = Hash::make($request->input('newpassword'));
				$user->save();
				$this->auth->logout();
				return redirect()->route('admin.getlogin');
			}
		}else{
			return redirect()->back()->withErrors('Wrong password!');
		}
	}

	public function getCreateUser(){
		return view('Admin::users.create');
	}

	public function postCreateUser(){
		$validator = $this->validator($request->all());

		if ($validator->fails())
		{
			$this->throwValidationException(
				$request, $validator
			);
		}
		$user = $this->create($request->all());

		$role = Role::where('name',$request->input('role'))->first();
		if($role){
			$user->attachRole($role);
			$permission = Permission::find(1);
			$role->attachPermission($permission);
		}
		Notification::success('Create User Successfull.')
		return redirect()->route('admin.getCreateUser');
	}

}
