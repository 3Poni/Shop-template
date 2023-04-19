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
Route::get('/user', 'User\IndexController@index');
Route::get('/user/settings', 'User\Settings\IndexController@index');
Route::get('/user/orders', 'User\Orders\IndexController@index');
Route::get('/user/orders/pay/?id={id}', 'User\Orders\PayController@pay');
Route::get('/user/orders/show/?id={id}', 'User\Orders\ShowController@show');
Route::get('/user/edit/?id={id}', 'User\Settings\EditController@edit');
Route::post('/user/update', 'User\Settings\UpdateController@update');
Route::post('/user/delete', 'User\Settings\DeleteController@delete');
//
//
// -- Admin Group
    Route::get('/admin', 'Admin\IndexController@index');
    Route::get('/admin/settings', 'Admin\Settings\IndexController@index');
    Route::get('/admin/edit/?id={id}', 'Admin\Settings\EditController@edit');
    Route::post('/admin/update', 'Admin\Settings\UpdateController@update');
    Route::post('/admin/delete', 'Admin\Settings\DeleteController@delete');
    // Items
    Route::get('/admin/items', 'Admin\Items\IndexController@index');
    Route::get('/admin/items/create', 'Admin\Items\CreateController@create');
    Route::get('/admin/items/show/?id={id}', 'Admin\Items\ShowController@show');
    Route::get('/admin/items/edit/?id={id}', 'Admin\Items\EditController@edit');
    Route::post('/admin/items/store', 'Admin\Items\StoreController@store');
    Route::post('/admin/items/update', 'Admin\Items\UpdateController@update');
    Route::post('/admin/items/delete', 'Admin\Items\DeleteController@delete');
    // -- !
    // Categories
    Route::get('/admin/categories', 'Admin\Categories\IndexController@index');
    Route::get('/admin/categories/create', 'Admin\Categories\CreateController@create');
    Route::get('/admin/categories/show/?id={id}', 'Admin\Categories\ShowController@show');
    Route::get('/admin/categories/edit/?id={id}', 'Admin\Categories\EditController@edit');
    Route::post('/admin/categories/store', 'Admin\Categories\StoreController@store');
    Route::post('/admin/categories/update', 'Admin\Categories\UpdateController@update');
    Route::post('/admin/categories/delete', 'Admin\Categories\DeleteController@delete');
    // -- !
    // Users
    Route::get('/admin/users', 'Admin\Users\IndexController@index');
    Route::get('/admin/users/create', 'Admin\Users\CreateController@create');
    Route::get('/admin/users/show/?id={id}', 'Admin\Users\ShowController@show');
    Route::get('/admin/users/edit/?id={id}', 'Admin\Users\EditController@edit');
    Route::post('/admin/users/store', 'Admin\Users\StoreController@store');
    Route::post('/admin/users/update', 'Admin\Users\UpdateController@update');
    Route::post('/admin/users/delete', 'Admin\Users\DeleteController@delete');
    // Orders
    Route::get('/admin/orders', 'Admin\Orders\IndexController@index');
    Route::get('/admin/orders/create', 'Admin\Orders\CreateController@create');
    Route::get('/admin/orders/show/?id={id}', 'Admin\Orders\ShowController@show');
    Route::get('/admin/orders/edit/?id={id}', 'Admin\Orders\EditController@edit');
    Route::post('/admin/orders/store', 'Admin\Orders\StoreController@store');
    Route::post('/admin/orders/update', 'Admin\Orders\UpdateController@update');
    Route::post('/admin/orders/delete', 'Admin\Orders\DeleteController@delete');
    // -- !
// -- End Admin !!
//



