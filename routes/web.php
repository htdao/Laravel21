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
    Route::get('/products/detail', 'ProductController@detail')->name('frontend.product.detail');
    Route::get('/products/cart', 'ProductController@cart')->name('frontend.product.cart');
    Route::get('/products/checkout', 'ProductController@checkout')->name('frontend.product.checkout');


    //tài khoản
    Route::get('/login', 'AccountController@loginForm')->name('frontend.login');
    Route::get('/register', 'AccountController@register')->name('frontend.register');
    Route::get('/account', 'AccountController@index')->name('frontend.account');


});

Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login.form');
Route::post('admin/store', 'Auth\LoginController@login')->name('login.store');
Route::get('admin/logout', 'Auth\LogoutController@logout')->name('logout');
Route::get('admin/register', 'Auth\RegisterController@showForm')->name('register.form');
Route::post('admin/register', 'Auth\RegisterController@register')->name('register.store');

//Trang quản lý
Route::group([
    'namespace' => 'Backend',
    'prefix' => 'admin',
    'middleware' => ['auth','check_admin'],
], function (){
    // Trang dashboard - trang chủ admin
    Route::get('/dashboard', 'DashboardController@index')->name('backend.dashboard');

    // Quản lý sản phẩm
    Route::group(['prefix' => 'products'], function(){
        Route::get('/', 'ProductController@index')->name('backend.product.index');
        Route::get('/create', 'ProductController@create')->name('backend.product.create');
        Route::post('/', 'ProductController@store')->name('backend.product.store');
        Route::get('/edit/{product}', 'ProductController@edit')->name('backend.product.edit')
            ->middleware('can:update,product');
        Route::post('/{product}', 'ProductController@update')->name('backend.product.update')
            ->middleware('can:update,product');
        Route::delete('/delete/{product}', 'ProductController@destroy')->name('backend.product.destroy')
            ->middleware('can:delete,product');
        Route::get('/show/{id}', 'ProductController@show')->name('backend.product.show');
        Route::get('/{id}/image', 'ProductController@showImages')->name('backend.product.image');
    });

    //Quản lý người dùng
    Route::group(['prefix' => 'users'], function(){
        Route::get('/', 'UserController@index')->name('backend.user.index');
        Route::get('/create', 'UserController@create')->name('backend.user.create');
        Route::post('/', 'UserController@store')->name('backend.user.store');
        Route::get('/edit/{user}', 'UserController@edit')->name('backend.user.edit')
            ->middleware('can:update,user');
        Route::post('/{user}', 'UserController@update')->name('backend.user.update');
        Route::delete('/delete/{user}', 'UserController@destroy')->name('backend.user.destroy')
            ->middleware('can:delete,user');
        Route::get('/show/{id}', 'UserController@show')->name('backend.user.show');
        Route::get('/{id}/product', 'UserController@showProducts')->name('backend.user.product');
    });

    //Quản lý danh mục
    Route::group(['prefix' => 'categories'], function(){
        Route::get('/', 'CategoryController@index')->name('backend.category.index');
        Route::get('/create', 'CategoryController@create')->name('backend.category.create');
        Route::post('/', 'CategoryController@store')->name('backend.category.store');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('backend.category.edit');
        Route::post('/update/{id}', 'CategoryController@update')->name('backend.category.update');
        Route::delete('/delete/{id}', 'CategoryController@destroy')->name('backend.category.destroy');
        Route::get('/show/{id}', 'CategoryController@show')->name('backend.category.show');
        Route::get('/{id}/product', 'CategoryController@showProducts')->name('backend.category.product');
    });

    //Quản lý thương hiệu
    Route::group(['prefix' => 'trademarks'], function() {
        Route::get('/', 'TrademarkController@index')->name('backend.trademark.index');
        Route::get('/create', 'TrademarkController@create')->name('backend.trademark.create');
        Route::post('/', 'TrademarkController@store')->name('backend.trademark.store');
        Route::get('/edit/{id}', 'TrademarkController@edit')->name('backend.trademark.edit');
        Route::post('/update/{id}', 'TrademarkController@update')->name('backend.trademark.update');
        Route::delete('/delete/{id}', 'TrademarkController@destroy')->name('backend.trademark.destroy');
    });

    //Quản lý đơn hàng
    Route::group(['prefix' => 'orders'], function(){
        Route::get('/{id}/product', 'OrderController@showProducts')->name('backend.order.product');
    });
});



