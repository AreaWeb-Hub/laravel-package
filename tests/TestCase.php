<?php

namespace AreaWeb\LaravelPackage\Tests;

use AreaWeb\LaravelPackage\Providers\LaravelPackageServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            LaravelPackageServiceProvider::class
        ];
    }
}