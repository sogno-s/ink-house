<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


//-------------Запросы GET
Route::get('/products', [ProductController::class, 'index']);

//-------------Запросы POST
Route::post('/products/upload', [ProductController::class, 'uploadImage']);
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'loginUser']);

//------------Middleware
Route::middleware('auth:sanctum')->post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
Route::middleware('auth:sanctum')->get('/user', [\App\Http\Controllers\AuthController::class, 'user']);
Route::middleware('auth:sanctum')->post('/products', [ProductController::class, 'store']);


