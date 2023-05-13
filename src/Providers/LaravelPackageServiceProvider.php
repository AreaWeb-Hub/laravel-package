<?php

namespace AreaWeb\LaravelPackage\Providers;

use AreaWeb\LaravelPackage\Services\TestService;
use Illuminate\Support\ServiceProvider;

class LaravelPackageServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TestService::class, TestService::class);

        $this->mergeConfigFrom(
            __DIR__ . '/../../config/laravel-package.php', 'laravel-package'
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/laravel-package-web.php');
    }
}