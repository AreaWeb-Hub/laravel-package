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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}