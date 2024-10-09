<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


//-------------Запросы GET
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/category', [\App\Http\Controllers\CategoryController::class, 'index']);

//-------------Запросы POST
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'loginUser']);
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);

Route::post('/products/upload', [ProductController::class, 'uploadImage']);
Route::post('/products/category/{id}', [ProductController::class, 'show']);

Route::post('/products/{id}', [\App\Http\Controllers\CategoryController::class, 'showProductInCategory']);

//------------Middleware
Route::middleware('auth:sanctum')->post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
Route::middleware('auth:sanctum')->get('/user', [\App\Http\Controllers\AuthController::class, 'user']);

Route::middleware('auth:sanctum')->post('/products', [ProductController::class, 'store']);
Route::middleware('auth::sanctum')->delete('/products/{id}', [ProductController::class, 'destroy']);

Route::middleware('auth:sanctum')->post('/products/category', [\App\Http\Controllers\CategoryController::class, 'addCategory']);
Route::middleware('auth:sanctum')->delete('/product/category/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy']);


