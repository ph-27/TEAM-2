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

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', function () {
    return view('pages.users.index');
})->name('home');

Route::get('/product/detail', function () {
    return view('pages.users.product.detail');
})->name('product.detail');

Route::get('/order/index', function () {
    
    return view('pages.users.order.index');
})->name('order.index');


Route::post('register',[
    'as' => 'register',
    'users' =>'userController@postregister'

]);
