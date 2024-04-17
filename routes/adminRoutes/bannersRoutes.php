<?php

use App\Http\Controllers\AdminPanel\BannerController;
use Illuminate\Support\Facades\Route;


Route::prefix('banners')->name('banners.')->group(function () {
    Route::get('/', [BannerController::class, 'index'])->name('index');
});
