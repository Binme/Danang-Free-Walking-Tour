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

Route::get('/', 'HomeController@index');
Route::get('/news/{id}','New_detailController@getNewsById');
Route::get('/recoms/{id}','Recom_detailController@index');
Route::post('/paypal','PaymentController@payWithpaypal');
Route::get('/admin',function(){
	return view('admin/index');
});

