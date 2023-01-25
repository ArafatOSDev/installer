<?php

use Illuminate\Support\Facades\Route;
use Pixamo\Installer\controllers\InstallerController;

Route::get('/install', [InstallerController::class, 'index']);
Route::get('/install/configuration', [InstallerController::class, 'config']);
Route::post('/install/configuration', [InstallerController::class, 'update']);
Route::post('/install/migrate', [InstallerController::class, 'migrate']);
Route::get('/install/complete', [InstallerController::class, 'congratulations']);
