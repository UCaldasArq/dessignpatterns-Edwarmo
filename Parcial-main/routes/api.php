<?php

use App\Http\Controllers\Api\ProductsController as ApiProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::apiResource('products', ApiProductsController::class);

use App\Http\Controllers\Api\CategoryController;

Route::apiResource('categories', CategoryController::class);

Route::get('categories', [CategoryController::class, 'index']);


Route::get('categories', [CategoryController::class, 'index']);
Route::post('categories', [CategoryController::class, 'store']);
Route::get('categories/{id}', [CategoryController::class, 'show']);
Route::put('categories/{id}', [CategoryController::class, 'update']);
Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
