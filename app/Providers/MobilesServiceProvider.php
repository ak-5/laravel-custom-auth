<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Electro\Mobiles;


class MobilesServiceProvider extends ServiceProvider
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
        $this->app->bind('mobiles',function(){

            return new Mobiles();

        });
    }
}
