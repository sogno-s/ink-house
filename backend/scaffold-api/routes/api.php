<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


//-------------Запросы GET
Route::get('/test', [ProductController::class, 'test']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/categories', [\App\Http\Controllers\CategoryController::class, 'index']);

//-------------Запросы POST
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'loginUser']);
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);

Route::post('/products/upload', [ProductController::class, 'uploadImage']);
Route::post('/products/category/{id}', [ProductController::class, 'show']);


//------------Middleware
Route::middleware('auth:sanctum')->post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
Route::middleware('auth:sanctum')->get('/user', [\App\Http\Controllers\AuthController::class, 'user']);

Route::middleware('auth:sanctum')->post('/products/categories', [\App\Http\Controllers\CategoryController::class, 'store']);
Route::middleware('auth:sanctum')->delete('/products/category/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy']);

Route::middleware('auth:sanctum')->post('/products', [ProductController::class, 'store']);
Route::middleware('auth::sanctum')->delete('/products/{id}', [ProductController::class, 'destroy']);
Route::post('/products/{id}', [\App\Http\Controllers\CategoryController::class, 'showProductInCategory']);

