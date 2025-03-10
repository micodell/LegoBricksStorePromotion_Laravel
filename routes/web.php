<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [ProductsController::class, 'index'])->name('index');

// Route::get('/product', function () {
//     return view('product');
// });

Route::get('/product/{id}', [ProductsController::class, 'read'])->name('product.read');
