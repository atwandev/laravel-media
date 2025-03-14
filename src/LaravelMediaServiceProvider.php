<?php

namespace AtwanDev\LaravelMedia;

use AtwanDev\LaravelMedia\Services\ImageService;
use Illuminate\Support\ServiceProvider;

class LaravelMediaServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-media.php', 'laravel-media');
    }

    public function boot()
    {
        $this->app->bind('image-service', function () {
            return new ImageService;
        });
    }
}
