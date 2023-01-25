<?php

namespace Pixamo\Installer;

use Illuminate\Support\ServiceProvider;

class InstallerServiceProvider extends ServiceProvider
{
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
