<?php

Route::group(['namespace'=>'App\Modules\Frontend\Controllers'],function(){
	Route::get('/',['as'=>'home','uses'=>'HomeController@getIndex']);

	Route::get('quoc-gia/du-hoc-{slug}',['as'=>'quocgia','uses'=>'DestinationController@getDetail'])->where(['slug'=>'[0-9a-zA-Z.-\/]+']);
	Route::get('quoc-gia/{slugcountry}/{slugtour}',['as'=>'quocgia.detail','uses'=>'DestinationController@getDetail'])->where(['slugcountry'=>'[0-9a-zA-Z.-\/]+','slugtour'=>'[0-9a-zA-Z.-\/]+']);

	Route::get('khuyen-mai',['as'=>'khuyenmai','uses'=>'PromotionController@getPromotion']);

	Route::get('trai-nghiem-du-hoc',['as'=>'trainghiem','uses'=>'TestimonialController@getTestimonial']);
	Route::get('trai-nghiem-du-hoc/{slug}',['as'=>'trainghiem.detail','uses'=>'TestimonialController@getTestimonialDetail'])->where(['slug'=>'[a-zA-Z0-9.-\/]+']);

	Route::get('lien-he',['as'=>'contact','uses'=>'ContactController@getIndex']);
	Route::post('lien-he',['as'=>'contact.postRegister','uses'=>'ContactController@postRegister']);
	Route::post('ajaxCenter',['as'=>'contact.postAjaxCenter','uses'=>'ContactController@postAjaxCenter']);

});
