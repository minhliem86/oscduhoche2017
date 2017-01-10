<?php

Route::group(['prefix'=>'admin','namespace'=>'App\Modules\Admin\Controllers'],function(){
	Route::get('dashboard',['as'=>'admin','uses'=>'AdminController@index']);

	/*PROMOTION*/
	Route::resource('promotion','PromotionController');
});