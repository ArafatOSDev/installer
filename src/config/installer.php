<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Require PHP Version
    --------------------------------------------------------------------------
    |
    | Here you can set which PHP version is required for install this project.
    |
    */

    'php_verison' => 8.1,

    /*
    |--------------------------------------------------------------------------
    | Admin Login Panel Url
    --------------------------------------------------------------------------
    |
    | Here you can set Admin Login Panel Url.
    |
    */

    'admin_login' => '/login',

    /*
    |--------------------------------------------------------------------------
    | Set favicon Path
    --------------------------------------------------------------------------
    |
    | Here you can Set Favicon.
    |
    */

    'favicon_path' => 'favicon.ico',

    /*
    |--------------------------------------------------------------------------
    | Set Folder Permissions
    --------------------------------------------------------------------------
    |
    | Here you can Set Folder Permissions.
    |
    */

    'permissions' => [
        base_path('.env'),
        base_path('bootstrap/cache'),
        base_path('storage')
    ]

];
