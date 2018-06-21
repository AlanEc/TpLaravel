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

Route::get('/home', function () {
    return view('home');
});

Route::get('/dish/{id}', 'DishController@show');
Route::get('/order/', 'OrderController@make');
Route::post('/restaurants/', 'RestaurantController@getList');
Route::post('/restaurant/{id}', 'RestaurantController@show');


// Route::group(['middleware' => ['auth']], function () {
// 	Route::get('/create/', 'OfferController@create');
// });

// Auth::routes();


