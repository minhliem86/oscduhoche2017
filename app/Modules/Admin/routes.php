<?php

Route::group(['prefix'=>'admin','namespace'=>'App\Modules\Admin\Controllers'],function(){

	Route::get('role/create',function(){
		$admin = new \App\Models\Role();
		$admin->name = 'admin';
		$admin->display_name = 'Administrator';
		$admin->description = 'Admin can create user';
		$admin->save();

		$mod = new \App\Models\Role();
		$mod->name = 'mod';
		$mod->display_name = 'Moderator';
		$mod->description = 'Mod can only upload photos';
		$mod->save();

		return "Done";
	});

	Route::get('permission/create',function(){
		$login = new \App\Models\Permission();
		$login->name = 'login_dashboard';
		$login->display_name = 'Login Dashboard';
		$login->description = 'can login to dashboard';
		$login->save();

		return "Done";
	});

	Route::get('login',['as'=>'admin.getlogin','uses'=>'Auth\AuthController@getLogin']);
	Route::post('login',['as'=>'admin.postLogin','uses'=>'Auth\AuthController@postLogin']);

	Route::get('register',['as'=>'admin.getRegister','uses'=>'Auth\AuthController@getRegister']);
	Route::post('register',['as'=>'admin.postRegister','uses'=>'Auth\AuthController@postRegister']);

	Route::get('sendEmailReset',['as'=>'admin.getSendEmailReset','uses'=>'Auth\PasswordController@getEmail']);
	Route::post('sendEmailReset',['as'=>'admin.postSendEmailReset','uses'=>'Auth\PasswordController@postEmail']);
	Route::get('resetPassword/{token?}',['as'=>'admin.getresetPassword','uses'=>'Auth\PasswordController@getReset']);
	Route::post('resetPassword',['as'=>'admin.postresetPassword','uses'=>'Auth\PasswordController@postReset']);

	Route::get('logout',['as'=>'admin.getLogout','uses'=>'Auth\AuthController@getLogout']);

	Route::group(['middleware'=>'checkLogin'],function(){
		Route::get('dashboard',['as'=>'admin','uses'=>'AdminController@index']);

		Route::group(['middleware'=>'checkAdminRole'], function(){
			/*PROMOTION*/
			Route::post('promotion/deleteall',['as'=>'admin.promotion.deleteall','uses'=>'PromotionController@deleteAll']);
			Route::resource('promotion','PromotionController');

			/*COUTRY*/
			Route::post('country/deleteall',['as'=>'admin.country.deleteall','uses'=>'CountryController@deleteAll']);
			Route::post('country/ajaxRemoveBanner',['as'=>'admin.country.removeBanner','uses'=>'CountryController@removeBanner']);
			Route::resource('country','CountryController');

			/*LOCATION*/
			Route::post('location/deleteall',['as'=>'admin.location.deleteall','uses'=>'LocationController@deleteAll']);
			Route::resource('location','LocationController');

			/*TESTIMONIAL*/
			Route::post('testimonial/deleteall',['as'=>'admin.testimonial.deleteall','uses'=>'TestimonialController@deleteAll']);
			Route::resource('testimonial','TestimonialController');

			/*Image*/
			Route::post('image/deleteall',['as'=>'admin.image.deleteall','uses'=>'ImageController@deleteAll']);
			Route::resource('image','ImageController');

			/*Tour*/
			Route::post('tour/deleteall',['as'=>'admin.tour.deleteall','uses'=>'TourController@deleteAll']);
			// Route::post('tour/addSchedule',['as'=>'admin.tour.addSchedule','uses'=>'TourController@addSchedule']);
			// Route::post('tour/ajaxDeleteSchedule',['as'=>'admin.tour.ajaxDeleteShedule','uses'=>'TourController@ajaxDeleteSchedule']);
			Route::resource('tour','TourController');

			// MANAGEMENT USER
		});

		/*CHANGE PASS*/
		Route::get('password',['as'=>'admin.getChangePass','uses'=>'AdminController@getChangePass']);
		Route::post('password',['as'=>'admin.postChangePass','uses'=>'AdminController@postChangePass']);



	});


});
