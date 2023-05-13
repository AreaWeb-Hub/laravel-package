<?php

namespace AreaWeb\LaravelPackage\Facades;

use AreaWeb\LaravelPackage\Services\TestService;
use Illuminate\Support\Facades\Facade;

class Test extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return TestService::class;
    }
}