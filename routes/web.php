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

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home', 'DishController@index')->name('home');
Route::get('/dish/{id}', 'DishController@show')->name('show_dish');

Route::get('/order/', 'OrderController@make')->name('order');

Route::post('/restaurants/', 'RestaurantController@getList')->name('restaurants');
Route::post('/restaurant/{id}', 'RestaurantController@show')->name('show_restaurants');

// Route::group(['middleware' => ['auth']], function () {
// 	Route::get('/create/', 'OfferController@create');
// });

// Auth::routes();


