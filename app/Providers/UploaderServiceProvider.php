<?php

namespace App\Providers;

use App\Services\UploaderService;
use Illuminate\Support\ServiceProvider;

class UploaderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(/*UploaderService::class*/'uploader', function ($app) {
            return new UploaderService;
        });
    }

    public function provides()
    {
        return ['uploader'];
    }
}
