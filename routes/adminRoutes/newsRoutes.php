<?php

use App\Http\Controllers\AdminPanel\NewsController;
use Illuminate\Support\Facades\Route;


Route::prefix('news')->name('news.')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('index');

    Route::get('/create', [NewsController::class, 'create'])->name('create');
    Route::post('/store', [NewsController::class, 'store'])->name('store');

    Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [NewsController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [NewsController::class, 'destroy'])->name('destroy');
    Route::get('/change-status', [NewsController::class, 'changeStatus'])->name('changeStatus');
    Route::get('/change-place', [NewsController::class, 'changePlace'])->name('changePlace');
});
