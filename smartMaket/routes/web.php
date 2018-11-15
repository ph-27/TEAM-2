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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();// cai router do o day ma bi comment lai roi

Route::get('/home', 'HomeController@index')->name('home');
use App\Http\Reqests\ProductRequest;
View::composer('admin.partials.form.product',function($view)
{
	$view->categories = \App\Models\Category::pluck('name','id');
});

Route::get('/', function () 
{
    return redirect('categories');
});
Route::resource('categories', 'CategoryController');

Route::resource('products', 'ProductController');

Route::get('/products/categories/search/{id}', [
    'uses' => 'ProductController@category',
    'as' => 'products.category',
]);

Route::get('/product/detail', function ()
{
    return view('pages.users.product.detail');
})->name('product.detail');

Route::get('/order/index', function () 
{
    return view('pages.users.order.index');
})->name('order.index');
Route::get('/home', function () 
{
    return view('pages.users.index');
})->name('home');

Route::post('register', [
    'as' => 'register',
	'uses' => 'Auth\RegisterController@postRegister' 
]);
