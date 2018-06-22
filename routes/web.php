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

Route::get('/search', function (Request $request) {
    return App\Dish::search($request->search)->get();
})->name('search');

//--------------------------------------------------------------------------
// HOME
Route::get('/home', 'DishController@index')->name('home');

//--------------------------------------------------------------------------
// AUTH
Auth::routes();
Route::get('/home', 'DishController@index')->name('home');

//--------------------------------------------------------------------------
// DISH
Route::get('/dish/', 'DishController@index')->name('dish');

Route::get('/dish/manage', 'DishController@manage')->name('manage_dish');
Route::get('/dish/add', 'DishController@create')->name('create_dish');
Route::post('/dish/add', 'DishController@store')->name('store_dish');

Route::get('/dish/{id}/edit', 'DishController@edit')->name('edit_dish');
Route::delete('/dish/{id}/delete', 'DishController@delete')->name('delete_dish');

Route::get('/dish/{id}', 'DishController@show')->name('show_dish');


Route::put('/dish/{id}', 'DishController@update')->name('update_dish');

//--------------------------------------------------------------------------
// ORDER
Route::get('/order/', 'OrderController@index')->name('order');

//--------------------------------------------------------------------------
// RESTAURANT

Route::get('/restaurant/', 'RestaurantController@index')->name('restaurant');

Route::get('/restaurant/manage', 'RestaurantController@manage')->name('manage_restaurant');

Route::get('/restaurant/add', 'RestaurantController@create')->name('create_restaurant');
Route::post('/restaurant/add', 'RestaurantController@store')->name('store_restaurant');

Route::get('/restaurant/{id}', 'RestaurantController@show')->name('show_restaurant');

Route::get('/restaurant/{id}/manage/', 'RestaurantController@manage_dishes')->name('manage_restaurant_dishes');

Route::delete('/restaurant/{id}/delete', 'RestaurantController@delete')->name('delete_restaurant');

Route::get('/restaurant/{id}/edit', 'RestaurantController@edit')->name('edit_restaurant');
Route::put('/restaurant/{id}', 'RestaurantController@update')->name('update_restaurant');

//--------------------------------------------------------------------------

// Route::group(['middleware' => ['auth']], function () {
// 	Route::get('/create/', 'OfferController@create');
// });

