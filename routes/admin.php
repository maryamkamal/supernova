<?php

Route::group(['prefix'=>'admin','namespace' => 'Admin'],function(){

Config::set('auth.defiens','admin');

Route::get('login','AdminAuth@login');
Route::post('login','AdminAuth@doLogin');

Route::group(['middleware'=>'admin:admin'],function(){


Route::get('/',function(){

return view('admin.index');

});


});

});












?>