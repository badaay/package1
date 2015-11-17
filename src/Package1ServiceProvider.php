<?php

namespace baday\package1;

use Illuminate\Support\ServiceProvider;

class Package1ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        require __DIR__ . '/Http/route.php';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
