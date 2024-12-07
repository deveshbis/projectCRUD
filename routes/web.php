<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'getPruductList'])->name('home');

Route::prefix('product')->group(function () {
    Route::get('/create/view', [ProductController::class, 'createProductView'])->name('product-create-view');
    Route::post('/create', [ProductController::class, 'createProduct'])->name('product-create');
    Route::get('/edit/{id}', [ProductController::class, 'editProduct'])->name('product-edit');
    Route::post('/update', [ProductController::class, 'updateProduct'])->name('product-update');
    Route::POST('/delete', [ProductController::class, 'deleteProduct'])->name('product-delete');
});