<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductController::class, 'index']) -> name('main');
Route::get('/cart', [CartController::class, 'index']) -> name('cart');
Route::get('/addToCart/{id}', [CartController::class, 'addToCart']) -> name('addToCart');
Route::get('/buy', [CartController::class, 'buy']) ->name ('buy');