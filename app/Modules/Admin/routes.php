<?php

Route::group(['prefix'=>'admin','namespace'=>'App\Modules\Admin\Controllers'],function(){
	Route::get('dashboard',['as'=>'admin','uses'=>'AdminController@index']);

	/*PROMOTION*/
	Route::post('promotion/deleteall',['as'=>'admin.promotion.deleteall','uses'=>'PromotionController@deleteAll']);
	Route::resource('promotion','PromotionController');

	/*COUTRY*/
	Route::post('country/deleteall',['as'=>'admin.country.deleteall','uses'=>'CountryController@deleteAll']);
	Route::resource('country','CountryController');

	/*LOCATION*/
	Route::post('location/deleteall',['as'=>'admin.location.deleteall','uses'=>'LocationController@deleteAll']);
	Route::resource('location','LocationController');

});