<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


//Route::get('/products', [ProductController::class, 'index']);

Route::middleware('auth:api')->group(function(){
    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/products', [ProductController::class, 'store'])->middleware('admin');
    Route::post('/products/upload', [ProductController::class, 'uploadImage']);

});

