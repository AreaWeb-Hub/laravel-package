<?php

namespace AreaWeb\LaravelPackage\Tests;

use AreaWeb\LaravelPackage\Facades\Test;

class TestServiceTest extends TestCase
{
    public function test_sum_function(): void
    {
        $this->assertEquals(10, Test::sum(5, 5));
        $this->assertEquals(14, Test::sum(10, 4));
    }

    public function test_get_another_text_function(): void
    {
        $this->assertIsString(Test::getAnotherText());
    }
}