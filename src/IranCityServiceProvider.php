<?php

namespace SamanSh999\IranCity;

use Illuminate\Support\ServiceProvider;

class IranCityServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadDependencies()
            ->publishDependencies();
    }

    public function register()
    {
        //
    }

    private function loadDependencies()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        return $this;
    }

    private function publishDependencies()
    {
        $this->publishes([
            __DIR__ . '/database/migrations' => database_path('migrations'),
        ], 'iran-city-migrations');

        $this->publishes([
            __DIR__ . '/database/seeds' => database_path('seeds'),
        ], 'iran-city-seeds');

        $this->publishes([
            __DIR__ . '/resources/js' => resource_path('js'),
        ], 'iran-city-vue-js');
    }
}
