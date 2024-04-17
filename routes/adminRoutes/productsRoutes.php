<?php

use App\Http\Controllers\AdminPanel\ProductController;
use Illuminate\Support\Facades\Route;


Route::prefix('products')->name('products.')->group(function () {



    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('store');

    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');
    Route::get('/change-status', [ProductController::class, 'changeStatus'])->name('changeStatus');
});
