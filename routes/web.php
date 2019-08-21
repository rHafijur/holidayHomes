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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/restaurant/{id}', 'RestaurantController@view');
Route::get('/search', 'RestaurantController@search');

Route::middleware(['auth','vendor'])->group(function () {
	Route::get('/vendor','VendorController@index');					
	Route::get('/vendor/restaurants','VendorController@restaurants');					
    Route::get('/vendor/resorts','VendorController@resorts');
    Route::get('/vendor/add-restaurant','VendorController@add_restaurant');					
    Route::get('/vendor/add-resort','VendorController@add_resort');
    Route::post('/vendor/save-restaurant','VendorController@save_restaurant');					
    Route::post('/vendor/save-resort','VendorController@save_resort');
    Route::get('/vendor/edit-restaurant/{id}','VendorController@edit_restaurant');					
    Route::get('/vendor/edit-resort/{id}','VendorController@edit_resort');
    Route::post('/vendor/update-restaurant','VendorController@update_restaurant');					
    Route::post('/vendor/update-resort','VendorController@update_resort');
    Route::get('/vendor/delete-restaurant/{id}','VendorController@delete_restaurant');					
    Route::get('/vendor/delete-resort/{id}','VendorController@delete_resort');		
});
