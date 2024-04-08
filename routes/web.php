<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/** User Panel */

Route::group([
    'prefix' => 'tr', // local lang prefix
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
});


Route::get('/', function () {
    return redirect(app()->getLocale());
});


/** Admin Panel */

Route::group([
    'prefix' => 'cp',
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});
