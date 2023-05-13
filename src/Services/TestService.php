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

    public function getAnotherRandomString(): string
    {
        return Str::random(100);
    }

    public function hashString(string $string): string
    {
        return Hash::make($string);
    }

    public function sum(int|float $a, int|float $b): int|float
    {
        return $a + $b;
    }
}