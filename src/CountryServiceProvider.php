<?php

namespace Friskals\Countries;

use Friskals\Countries\Libraries\Country;
use Illuminate\Support\ServiceProvider;

class CountryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services
     * 
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/country.php', 'country');
    }

    /**
     * Register the application services
     * 
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Country::class, function () {
            return new Country();
        });
    }
}
