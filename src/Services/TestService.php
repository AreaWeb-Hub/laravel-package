<?php

namespace AreaWeb\LaravelPackage\Services;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TestService
{
    public function getAnotherText(): string
    {
        return fake()->text;
    }

    public function hashString(string $string): string
    {
        return Hash::make($string);
    }

    public function sum(int|float $a, int|float $b): int|float
    {
        return $a + $b;
    }

    public function getUrl()
    {
        return config('laravel-package.url');
    }

    public function getSecret()
    {
        return config('laravel-package.secret');
    }
}