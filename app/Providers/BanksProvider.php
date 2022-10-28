<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BanksProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('Banks', function() {
            return new Banks();
        });
    }
}
