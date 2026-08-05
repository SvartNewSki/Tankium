<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductController::class, 'index']) -> name('main');
Route::get('/cart', [CartController::class, 'index']) -> name('cart');
Route::get('/item/{id}', [ProductController::class, 'item']) -> name('item');
// Route::get('/addToCart/{id}', [CartController::class, 'addToCart']) -> name('addToCart');
// Route::get('/buy', [CartController::class, 'buy']) ->name ('buy');
// Route::get('/clear',[CartController::class, 'clear']) ->name ('clear');


Route::post('/cart/add/{id}', [CartController::class, 'addToCart']) -> name('addToCart');
// Route::post('/cart/buy', [CartController::class, 'buyCart'])->name('buyCart');
Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('clearCart');

