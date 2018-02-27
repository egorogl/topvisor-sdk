<?php

namespace Egorogl\TopvisorSDK;

use Illuminate\Support\ServiceProvider;

class TopvisorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/topvisor.php', 'topvisor');
        $this->publishes([
            __DIR__.'/config' => base_path('config'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Session::class, function () {
            return new Session();
        });
    }
}
