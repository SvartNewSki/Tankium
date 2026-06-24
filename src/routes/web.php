<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductController::class, 'index']) -> name('main');
Route::get('/cart', [CartController::class, 'cart']) -> name('cart');
Route::get('/addToCart{id}', [CartController::class, 'addToCart']) -> name('addToCart');
