<?php

namespace Incoding\Template;

use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';

        // register our controller sample //
        // $this->app->make('Incoding\Template\TemplateController');//

        $this->publishes([
        __DIR__.'/app' => base_path('app'),
        __DIR__.'/database' => database_path(''),
        __DIR__.'/public/css' => public_path('css'),
        __DIR__.'/public/js' => public_path('js'),
        __DIR__.'/public/fonts' => public_path('fonts'),
        __DIR__.'/public/images' => public_path('images'),
        __DIR__.'/views' => resource_path('views'),
        __DIR__.'/routes' => base_path('routes'),


        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
