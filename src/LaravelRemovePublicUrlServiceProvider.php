<?php

namespace Dipeshsukhia\LaravelRemovePublicUrl;

use Illuminate\Support\ServiceProvider;

class LaravelRemovePublicUrlServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/public' => public_path(),
            __DIR__ . '/base' => base_path(),
        ], 'LaravelRemovePublicUrl');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
