<?php

Route::group(['namespace'=>'App\Modules\Frontend\Controllers'],function(){
	Route::get('/',['as'=>'home','uses'=>'HomeController@getIndex']);

	Route::get('du-hoc-{slug?}',['as'=>'quocgia','uses'=>'DestinationController@getCountry'])->where(['slug'=>'[0-9a-zA-Z.\-]+']);
	Route::get('du-hoc-{slugcountry}/{slugtour?}',['as'=>'quocgia.detail','uses'=>'DestinationController@getTour'])->where(['slugcountry'=>'[0-9a-zA-Z.\-]+','slugtour'=>'[0-9a-zA-Z.\-]+']);

	Route::get('khuyen-mai',['as'=>'khuyenmai','uses'=>'PromotionController@getPromotion']);

	Route::get('trai-nghiem-du-hoc',['as'=>'trainghiem','uses'=>'TestimonialController@getTestimonial']);
	Route::get('trai-nghiem-du-hoc/{slug}',['as'=>'trainghiem.detail','uses'=>'TestimonialController@getTestimonialDetail'])->where(['slug'=>'[a-zA-Z0-9.\-]+']);

	Route::get('lien-he',['as'=>'contact','uses'=>'ContactController@getIndex']);
	Route::get('thank-you',['as'=>'contact.thankyou','uses'=>'ContactController@getThankyou']);
	Route::post('lien-he',['as'=>'contact.postRegister','uses'=>'ContactController@postRegister']);
	Route::post('ajaxCenter',['as'=>'contact.postAjaxCenter','uses'=>'ContactController@postAjaxCenter']);

	// IMPORT USER
	Route::get('/import-user',['as' => 'f.importUser', 'uses'=>'ImportController@index']);
	Route::post('/import-user', ['as'=>'f.postImportUser', 'uses'=>'ImportController@postImportUser']);

	// CUSTOMER LOGIN
	Route::get('/dang-nhap',['as'=>'f.getLoginCustomer', 'uses'=>'Auth\AuthController@getLogin']);
	Route::post('/dang-nhap',['as'=>'f.postLoginCustomer', 'uses'=>'Auth\AuthController@postLogin']);
	Route::get('/dang-xuat',['as'=>'f.getLogoutCustomer', 'uses'=>'Auth\AuthController@getLogout']);

	Route::get('/thay-doi-mat-khau', ['middleware'=>'customer_login_not_yet','as'=>'f.getChangePass', 'uses' => 'Auth\AuthController@getChangePass']);
	Route::post('/thay-doi-mat-khau', ['middleware'=>'customer_login_not_yet','as'=>'f.postChangePass', 'uses' => 'Auth\AuthController@postChangePass']);

	Route::get('/sendEmailReset',['as'=>'f.getSendEmailReset','uses'=>'Auth\PasswordController@getEmail']);
	Route::post('/sendEmailReset',['as'=>'f.postSendEmailReset','uses'=>'Auth\PasswordController@postEmail']);
	Route::get('/resetPassword/{token?}',['as'=>'f.getresetPassword','uses'=>'Auth\PasswordController@getReset']);
	Route::post('/resetPassword',['as'=>'f.postresetPassword','uses'=>'Auth\PasswordController@postReset']);


});
