<?php

Route::get('/',['as'=>'homepage','uses'=>'HomeController@getIndex']);

Route::get('quocgia/{slug}',['as'=>'quocgia.detail','uses'=>'CountryController@getDetail'])->where(['slug'=>'[0-9a-zA-Z.-\/]+']);

Route::get('khuyen-mai',['as'=>'khuyenmai','uses'=>'PromotionController@getPromotion']);

Route::get('trai-nghiem-du-hoc',['as'=>'trainghiem','uses'=>'TestimonialController@getTestimonial']);
Route::get('trai-nghiem-du-hoc/{slug}',['as'=>'trainghiem.detail','uses'=>'TestimonialController@getTestimonialDetail'])->where(['slug'=>'[a-zA-Z0-9.-\/]+']);

Route::get('lien-he',['as'=>'contact','uses'=>'ContactController@getIndex']);
Route::post('lien-he',['as'=>'contact.postRegister','uses'=>'ContactController@postRegister']);
