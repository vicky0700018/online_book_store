<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Products routes
Route::get('/products/product-list', [ProductController::class, 'product_list'])->name('products.product_list');
Route::get('/products/show_product_form', [ProductController::class, 'show_product_form'])->name('products.show_product_form');
Route::post('/products/store-product-data', [ProductController::class, 'store_product_data'])->name('products.store_product_data');
// Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

// Users list route
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users-store', [UserController::class, 'store'])->name('users.store');
