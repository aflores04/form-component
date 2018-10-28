<?php

namespace FormComponent\FormComponent;

use Illuminate\Support\ServiceProvider;

class FormComponentServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'formcomponent');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'formcomponent');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/formcomponent.php', 'formcomponent');

        // Register the service the package provides.
        $this->app->singleton('formcomponent', function ($app) {
            return new FormComponent;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['formcomponent'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/formcomponent.php' => config_path('formcomponent.php'),
        ], 'formcomponent.config');

        // Publishing the views.
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/'),
        ], 'formcomponent.views');

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/formcomponent'),
        ], 'formcomponent.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/formcomponent'),
        ], 'formcomponent.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
