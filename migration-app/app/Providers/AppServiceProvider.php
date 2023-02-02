<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//fix migrate execute
use Illuminate\Support\Facades\Schema;

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
        //fix migrate execute
        Schema::defaultStringLength(191);
    }
}
