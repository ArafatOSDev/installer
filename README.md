## Laravel One Click Installer 

pixamo/installer is a Laravel package that makes it easy to install your application with just one click. With this package, you can quickly set up your application's environment, dependencies, and configurations without having to manually run multiple commands or manually edit files. It streamlines

![Pixamo Installer V1.0](https://www.linkpicture.com/q/FireShot-Capture-022-installer.test.png)


## Installation

You can install the package with [Composer](http://getcomposer.org/) using the following command:
```bash
composer require pixamo/installer
```

Copy the package config to your local config with the publish command:
```bash
php artisan vendor:publish --tag=installer
```

You can also check the installer is now active or not.
```bash
use Pixamo\Installer\Installer;

Installer::isActive();
```

If installer is active you can redirect it to installer page.
```bash
if(Installer::isActive())
{
    return redirect('install');
}
```
