<?php

namespace AreaWeb\LaravelPackage\Http\Controllers;

use Illuminate\Routing\Controller;

class LaravelPackageController extends Controller
{
    public function home(): string
    {
        return 'Hello, Laravel Package!';
    }
}