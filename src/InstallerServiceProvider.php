<?php

namespace Pixamo\Installer;

use Illuminate\Support\ServiceProvider;
use Pixamo\Installer\Facades\Installer;

class InstallerServiceProvider extends ServiceProvider
{


    public function register()
    {
        $this->app->bind('Installer', function($app) {
            return new Installer();
        });
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'installer');

        $this->publishes([
            __DIR__.'/views/publish' => base_path('/'),
        ], 'installer');

        $this->publishes([
            __DIR__.'/config/installer.php' => config_path('installer.php'),
        ], 'installer');
    }
}
