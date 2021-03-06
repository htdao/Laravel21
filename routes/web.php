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
    Route::get('/trademark/{id}', 'HomeController@trademark')->name('frontend.trademark');
    Route::get('/category/{id}', 'HomeController@category')->name('frontend.category');

    //Sản Phẩm
    Route::get('/products', 'ProductController@index')->name('frontend.product.index');
    Route::get('/products/show/{id}', 'ProductController@show')->name('frontend.product.show');
    Route::get('/products/checkout', 'ProductController@checkout')->name('frontend.product.checkout');

    //Giỏ hàng
    Route::get('/products/cart', 'CartController@index')->name('frontend.product.cart');
    Route::get('/products/cart/add/{id}', 'CartController@add')->name('frontend.product.add');
    Route::get('/products/cart/remove/{id}', 'CartController@remove')->name('frontend.product.remove');
    Route::get('/products/cart/destroy', 'CartController@destroy')->name('frontend.product.destroy');
    Route::get('/products/cart/increment/{id}', 'CartController@increment')->name('frontend.product.increment');
    Route::get('/products/cart/decrement/{id}', 'CartController@decrement')->name('frontend.product.decrement');
    //Thêm đơn hàng vào database
    Route::post('/products/order/store', 'CartController@store')->name('frontend.order.store');

    //tài khoản
    Route::get('/login', 'AccountController@loginForm')->name('frontend.loginForm');
    Route::post('/login', 'AccountController@login')->name('frontend.login');
    Route::get('/register', 'AccountController@registerForm')->name('frontend.register');
    Route::get('/account/{id}', 'AccountController@index')->name('frontend.account');
    Route::post('/account/update/{id}', 'AccountController@update')->name('frontend.account.update');
    Route::post('/account/updateP/{id}', 'AccountController@updateP')->name('frontend.account.updateP');

    //Đánh giá
    Route::get('/rating/{id}', 'RatingController@index')->name('frontend.rating.index');
    Route::post('/rating/store/{id}', 'RatingController@store')->name('frontend.rating.store');


});

//Đăng nhập trang admin
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login.form');
Route::post('/', 'Auth\LoginController@login')->name('login.store');
Route::get('admin/logout', 'Auth\LogoutController@logout')->name('logout');
//Route::get('admin/test', 'Auth\LogoutController@logout')->name('login');

//Đăng nhập-Đăng ký trang người dùng
Route::get('/login', 'Auth\LoginController@showLoginFormUser')->name('user.login.form');
Route::post('/login/store', 'Auth\LoginController@userLogin')->name('user.login.store');
Route::get('/logout', 'Auth\UserLogoutController@logout')->name('user.logout');
Route::get('/register', 'Auth\RegisterController@showForm')->name('register.form');
Route::post('/user/register', 'Auth\RegisterController@register')->name('register.store');

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
        Route::get('/edit/{user}', 'UserController@edit')->name('backend.user.edit');
        Route::post('/{id}', 'UserController@updateAcc')->name('backend.user.updateAcc');
        Route::delete('/delete/{user}', 'UserController@destroy')->name('backend.user.destroy')
            ->middleware('can:delete,user');
        Route::get('/show/{id}', 'UserController@show')->name('backend.user.show');
        Route::get('/account/{id}', 'UserController@account')->name('backend.user.account');
        Route::post('/updatep/{id}', 'UserController@updatePass')->name('backend.user.updatePass');
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
        Route::get('/', 'OrderController@index')->name('backend.order.index');
        Route::get('/show/{id}', 'OrderController@show')->name('backend.order.show');
        Route::get('/edit/{id}', 'OrderController@edit')->name('backend.order.edit');
        Route::post('/update/{id}', 'OrderController@update')->name('backend.order.update');
        Route::post('/status/{id}', 'OrderController@status')->name('backend.order.status');
        Route::post('/cancellationOrder/{id}', 'OrderController@cancellationOrder')->name('backend.order.cancellationOrder');
        Route::post('/cancellation/{id}', 'OrderController@cancellation')->name('backend.order.cancellation');
        Route::post('/search', 'OrderController@search')->name('backend.order.search');

    });

    //Thống kê
    Route::group(['prefix' => 'statisticals'], function(){
        Route::get('/', 'StatisticalController@index')->name('backend.statistical.index');
        Route::post('/filterByDate', 'StatisticalController@filterByDate')->name('backend.statistical.filterByDate');
        Route::post('/dayOrder', 'StatisticalController@dayOrder')->name('backend.statistical.dayOrder');
        Route::post('/filterAll', 'StatisticalController@filterAll')->name('backend.statistical.filterAll');


    });

    //Quản lý giao diện
    Route::group(['prefix' => 'home'], function(){
        Route::get('/', 'HomeController@index')->name('backend.home.index');
        Route::get('/create', 'HomeController@create')->name('backend.home.create');
        Route::post('/store', 'HomeController@store')->name('backend.home.store');
        Route::get('/edit/{id}', 'HomeController@edit')->name('backend.home.edit');
        Route::post('/update/{id}', 'HomeController@update')->name('backend.home.update');
        Route::get('/show/{id}', 'HomeController@show')->name('backend.home.show');
        Route::delete('/destroy/{id}', 'HomeController@destroy')->name('backend.home.destroy');
    });
});



