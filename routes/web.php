<?php

use App\Http\Controllers\OrderController;

Route::get('/customer/{id}/{name}/{address}', [OrderController::class, 'customer']);
Route::get('/item/{id}/{name}/{price}', [OrderController::class, 'item']);
Route::get('/order/{cid}/{cname}/{orderno}/{date}', [OrderController::class, 'order']);
Route::get('/orderDetails/{transno}/{orderno}/{itemid}/{name}/{price}/{qty}', [OrderController::class, 'orderDetails']);
