<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/product/add', [ProductController::class, 'addProduct'])->name('product.add');
Route::post('/products/store', [ProductController::class, 'storeProduct'])->name('products.store');
Route::get('/product/{id}/edit', [ProductController::class, 'editProduct'])->name('product.edit');
Route::put('/product/{id}/update', [ProductController::class, 'updateProduct'])->name('product.update');
Route::delete('/product/{id}/delete', [ProductController::class, 'deleteProduct'])->name('product.delete');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/category/add', [CategoryController::class, 'addCategory'])->name('category.add');
Route::post('/categories/store', [CategoryController::class, 'storeCategory'])->name('categories.store');
Route::get('/category/{id}/edit', [CategoryController::class, 'editCategory'])->name('category.edit');
Route::put('/categories/{id}/update', [CategoryController::class, 'updateCategory'])->name('categories.update');

