<?php

namespace SamanSh999\IranCity;

use Illuminate\Support\ServiceProvider;

class IranCityServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->publishes([
            __DIR__.'/database/seeds' => database_path('seeds'),
        ], 'samansh999-seeders');
    }

    public function register()
    {
        //
    }
}
