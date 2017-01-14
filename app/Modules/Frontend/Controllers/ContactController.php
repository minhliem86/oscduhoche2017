<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use App\Modules\Frontend\Requests\ContactRequest;
use App\Models\Register;

class ContactController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	
	public function getIndex(){
		return view('Frontend::pages.contact');
	}

	public function postRegister(ContactRequest $contactrequest){
		$type = explode('@',$contactrequest->input('content_type'));
		$content_type = $type['1'];
		$data = [
			'fullname'=> $contactrequest->input('name'),
			'phone'=> $contactrequest->input('phone'),
			'email'=> $contactrequest->input('email'),
			'id_city'=> $contactrequest->input('id_city'),
			'id_center'=> $contactrequest->input('id_center'),
			'country'=> $contactrequest->input('country'),
			'message'=> $contactrequest->input('message'),
			'content_type'=> $content_type,
			'inquiry'=> $contactrequest->input('inquiry'),
		];
		Register::create($data);
		return redirect()->back()->with('success','Cảm ơn bạn đã đăng ký thông tin tại ILA Du học.<br/>Nhân viên ILA sẽ liên lạc với bạn trong thời gian sớm nhất.');
	}


}
