<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\Settings;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('settings', Settings::first());
        View::share('sharedProducts', Product::limit(4)->orderBy('id', 'desc')->get());
    }
}
