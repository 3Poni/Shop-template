<?php

use Vendor\Routing\Route;


Route::get('/order/pay/?id={id}', 'Api\ApiController@send');

//TO ACCEPT RESULT FROM FOREIGN PAYMENT SERVICE
Route::post('/order/result', 'Api\ApiController@result');

