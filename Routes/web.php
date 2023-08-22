<?php

use App\Controllers\IndexController;
use Vendor\Routing\Route;

Route::get('/', 'IndexController@index');
//
// -- Items Group
Route::get('/items', 'Item\IndexController@index');
Route::get('/items?page={page}', 'Item\IndexController@index');
Route::get('/search/?page={page}', 'Item\SearchController@index');
Route::get('/items/search/?search={search}', 'Item\SearchController@index');
Route::get('/items/search/?search={search}&page={page}', 'Item\SearchController@index');
Route::get('/items/show/?id={id}', 'Item\ShowController@show');
Route::get('/items/sort/?by={column}&method={method}', 'Item\SortController@sort');
Route::get('/items/sort/?by={column}&method={method}&page={page}', 'Item\SortController@sort');
Route::post('/items/search', 'Item\SearchController@index');
Route::post('/item/add', 'Item\StoreController@store');
Route::post('/item/delete', 'Item\DeleteController@delete');
//
// Auth Group
Route::get('/register', 'Auth\RegisterController@index');
Route::post('/register', 'Auth\RegisterController@register');
Route::get('/login', 'Auth\LoginController@index');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LogoutController@logout');
// -- !!
// Cart Group
Route::get('/cart', 'Cart\IndexController@index');
Route::post('/cart/add', 'Cart\StoreController@store');
Route::post('/cart/delete', 'Cart\DeleteController@delete');
Route::post('/cart/buy', 'Order\StoreController@store');
// -- !!

// Categories Group
Route::get('/categories', 'Category\IndexController@index');
Route::get('/category/show/?id={id}', 'Category\ShowController@show');
//
// User group
Route::get('/user', 'User\IndexController@index')->middleware('user');
Route::get('/user/settings', 'User\Settings\IndexController@index')->middleware('user');
Route::get('/user/orders', 'User\Orders\IndexController@index')->middleware('user');
Route::get('/user/orders/pay/?id={id}', 'User\Orders\PayController@pay')->middleware('user');
Route::get('/user/orders/show/?id={id}', 'User\Orders\ShowController@show')->middleware('user');
Route::get('/user/edit/?id={id}', 'User\Settings\EditController@edit')->middleware('user');
Route::post('/user/update', 'User\Settings\UpdateController@update')->middleware('user');
Route::post('/user/delete', 'User\Settings\DeleteController@delete')->middleware('user');
//
//
// -- Admin Group
    Route::get('/admin', 'Admin\IndexController@index')->middleware('auth');
    Route::get('/admin/settings', 'Admin\Settings\IndexController@index')->middleware('auth');
    Route::get('/admin/edit/?id={id}', 'Admin\Settings\EditController@edit')->middleware('auth');
    Route::post('/admin/update', 'Admin\Settings\UpdateController@update')->middleware('auth');
    Route::post('/admin/delete', 'Admin\Settings\DeleteController@delete')->middleware('auth');
    // Items
    Route::get('/admin/items', 'Admin\Items\IndexController@index')->middleware('auth');
    Route::get('/admin/items/create', 'Admin\Items\CreateController@create')->middleware('auth');
    Route::get('/admin/items/show/?id={id}', 'Admin\Items\ShowController@show')->middleware('auth');
    Route::get('/admin/items/edit/?id={id}', 'Admin\Items\EditController@edit')->middleware('auth');
    Route::post('/admin/items/store', 'Admin\Items\StoreController@store')->middleware('auth');
    Route::post('/admin/items/update', 'Admin\Items\UpdateController@update')->middleware('auth');
    Route::post('/admin/items/delete', 'Admin\Items\DeleteController@delete')->middleware('auth');
    // -- !
    // Categories
    Route::get('/admin/categories', 'Admin\Categories\IndexController@index')->middleware('auth');
    Route::get('/admin/categories/create', 'Admin\Categories\CreateController@create')->middleware('auth');
    Route::get('/admin/categories/show/?id={id}', 'Admin\Categories\ShowController@show')->middleware('auth');
    Route::get('/admin/categories/edit/?id={id}', 'Admin\Categories\EditController@edit')->middleware('auth');
    Route::post('/admin/categories/store', 'Admin\Categories\StoreController@store')->middleware('auth');
    Route::post('/admin/categories/update', 'Admin\Categories\UpdateController@update')->middleware('auth');
    Route::post('/admin/categories/delete', 'Admin\Categories\DeleteController@delete')->middleware('auth');
    // -- !
    // Users
    Route::get('/admin/users', 'Admin\Users\IndexController@index')->middleware('auth');
    Route::get('/admin/users/create', 'Admin\Users\CreateController@create')->middleware('auth');
    Route::get('/admin/users/show/?id={id}', 'Admin\Users\ShowController@show')->middleware('auth');
    Route::get('/admin/users/edit/?id={id}', 'Admin\Users\EditController@edit')->middleware('auth');
    Route::post('/admin/users/store', 'Admin\Users\StoreController@store')->middleware('auth');
    Route::post('/admin/users/update', 'Admin\Users\UpdateController@update')->middleware('auth');
    Route::post('/admin/users/delete', 'Admin\Users\DeleteController@delete')->middleware('auth');
    // Orders
    Route::get('/admin/orders', 'Admin\Orders\IndexController@index')->middleware('auth');
    Route::get('/admin/orders/create', 'Admin\Orders\CreateController@create')->middleware('auth');
    Route::get('/admin/orders/show/?id={id}', 'Admin\Orders\ShowController@show')->middleware('auth');
    Route::get('/admin/orders/edit/?id={id}', 'Admin\Orders\EditController@edit')->middleware('auth');
    Route::post('/admin/orders/store', 'Admin\Orders\StoreController@store')->middleware('auth');
    Route::post('/admin/orders/update', 'Admin\Orders\UpdateController@update')->middleware('auth');
    Route::post('/admin/orders/delete', 'Admin\Orders\DeleteController@delete')->middleware('auth');
    // -- !
// -- End Admin !!
//



