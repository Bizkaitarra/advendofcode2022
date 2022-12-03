<?php

namespace App\Tests;


use App\Day1\CaloriesCounter;
use PHPUnit\Framework\TestCase;

class CaloriesCounterTest extends TestCase
{
    public function test() {
        $caloriesCounter = new CaloriesCounter();
        $this->assertEquals(0,$caloriesCounter->__invoke(''));
    }
}