<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    return view('welcome');
});

//Trang người dùng
Route::group([
    'namespace' => 'Frontend',
    'prefix' => '/',
], function (){
    //Trang chủ
    Route::get('/', 'HomeController@index')->name('frontend.home');
    Route::get('/contact', 'HomeController@contact')->name('frontend.home.contact');

    //Sản Phẩm
    Route::get('/products', 'ProductController@index')->name('frontend.product.index');
    Route::get('/products/show', 'ProductController@show')->name('frontend.product.show');

    //Tài khoản
    Route::get('/login', 'LoginController@index')->name('frontend.login');
    Route::get('/register', 'LoginController@register')->name('frontend.register');

});

Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login.form');
Route::post('admin/login', 'Auth\LoginController@login')->name('login.store');
Route::get('admin/logout', 'Auth\LogoutController@logout')->name('logout');
Route::get('admin/register', 'Auth\RegisterController@showForm')->name('register.form');
Route::post('admin/register', 'Auth\RegisterController@register')->name('register.store');

//Trang quản lý
Route::group([
    'namespace' => 'Backend',
    'prefix' => 'admin',
    'middleware' => ['auth'],
], function (){
    // Trang dashboard - trang chủ admin
    Route::get('/dashboard', 'DashboardController@index')->name('backend.dashboard');

    // Quản lý sản phẩm
    Route::group(['prefix' => 'products'], function(){
        Route::get('/', 'ProductController@index')->name('backend.product.index');
        Route::get('/create', 'ProductController@create')->name('backend.product.create');
        Route::post('/', 'ProductController@store')->name('backend.product.store');
        Route::get('/edit/{id}', 'ProductController@edit')->name('backend.product.edit');
        Route::post('/{id}', 'ProductController@update')->name('backend.product.update');
        Route::delete('/delete/{id}', 'ProductController@destroy')->name('backend.product.destroy');
        Route::get('/show/{id}', 'ProductController@show')->name('backend.product.show');
        Route::get('/{id}/image', 'ProductController@showImages')->name('backend.product.image');
    });

    //Quản lý người dùng
    Route::group(['prefix' => 'users'], function(){
        Route::get('/', 'UserController@index')->name('backend.user.index');
        Route::get('/create', 'UserController@create')->name('backend.user.create');
        Route::post('/', 'UserController@store')->name('backend.user.store');
        Route::get('/edit/{user}', 'UserController@edit')->name('backend.user.edit');
        Route::post('/{user}', 'UserController@update')->name('backend.user.update');
        Route::delete('/delete/{id}', 'UserController@destroy')->name('backend.user.destroy');
        Route::get('/show/{id}', 'UserController@show')->name('backend.user.show');
        Route::get('/{id}/product', 'UserController@showProducts')->name('backend.user.product');
    });

    //Quản lý danh mục
    Route::group(['prefix' => 'categories'], function(){
        Route::get('/', 'CategoryController@index')->name('backend.category.index');
        Route::get('/create', 'CategoryController@create')->name('backend.category.create');
        Route::post('/', 'CategoryController@store')->name('backend.category.store');
        Route::delete('/{id}', 'CategoryController@destroy')->name('backend.category.destroy');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('backend.category.edit');
        Route::post('/update/{id}', 'CategoryController@update')->name('backend.category.update');
        Route::delete('/delete/{id}', 'CategoryController@destroy')->name('backend.category.destroy');
        Route::get('/show/{id}', 'CategoryController@show')->name('backend.category.show');
        Route::get('/{id}/product', 'CategoryController@showProducts')->name('backend.category.product');
    });

    //Quản lý đơn hàng
    Route::group(['prefix' => 'orders'], function(){
        Route::get('/{id}/product', 'OrderController@showProducts')->name('backend.order.product');
    });
});



