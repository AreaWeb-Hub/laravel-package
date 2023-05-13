<?php

use AreaWeb\LaravelPackage\Http\Controllers\LaravelPackageController;
use Illuminate\Support\Facades\Route;

Route::get('/laravel-package', [LaravelPackageController::class, 'home'])
    ->name('laravel-package.home');