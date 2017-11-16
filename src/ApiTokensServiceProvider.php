<?php

namespace Selfreliance\apitokens;

use Illuminate\Support\ServiceProvider;

class ApiTokensServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
        $this->app->make('Selfreliance\Apitokens\ApiTokensController');
        $this->loadViewsFrom(__DIR__.'/views', 'apitokens');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'translate-tokens');
        $this->publishes([
            __DIR__ . '/migrations/' => database_path('migrations')
        ], 'migrations');
        $this->publishes([
            __DIR__ . '/Models/Users_Wallets.php' => app_path('Models/Users_Wallets.php')
        ], 'model');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }	
}