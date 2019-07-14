<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

   Route::post('/store/Contact','ContactController@store');
   Route::get('/courses', 'CourseController@index')->name('courses');
   Route::get('/course_details/{id}', 'CourseController@view');
   Route::post('/student_enroll','StudentController@store')->name('student_enroll');
   Route::get('/store', 'ElectronicstoreController@index')->name('store');
   Route::get('/search','ElectronicstoreController@search')->name('search');
   Route::get('/cart', 'CartController@index')->name('cart');
   Route::get('/add-to-cart/{id}', 'CartController@addToCart');
   Route::get('/cart.remove/{id}', 'CartController@cartremove');
   Route::get('/cart.update/{id}', 'CartController@cartupdate');
   Route::get('/cart.destroy', 'CartController@destroy')->name('cart.destroy');
   Route::post('/order', 'CustomerController@store')->name('order-store');
   Route::get('makerspace', function () {
    return view('makerspace.makerSpace');
   });
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
