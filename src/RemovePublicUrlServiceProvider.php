<?php

namespace DipeshSukhia\LaravelRemovePublicUrl;

use Illuminate\Support\ServiceProvider;

class RemovePublicUrlServiceProvider extends ServiceProvider
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
        $this->publishes([
            __DIR__ . '/public' => public_path(),
            __DIR__ . '/base' => base_path(),
        ], 'LaravelRemovePublicUrl');
    }
}
