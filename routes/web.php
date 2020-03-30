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

use App\Http\Controllers\GoodsController;

Route::get('/', 'GoodsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/orders', 'OrdersController@index')->name('orders');
Route::get('/product/{id}', function ($id) {
    return GoodsController::product($id);
});
Route::get('/category/{id}', function ($id) {
    return GoodsController::cat($id);
});

// Ajax
Route::post('/ajax','AjaxController@index');

// 404 ???