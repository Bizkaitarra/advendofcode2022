<?php

namespace App\Tests;


use App\Day1\CaloriesCounter;
use PHPUnit\Framework\TestCase;

class CaloriesCounterTest extends TestCase
{
    /**
     * @test
     */
    public function assertExampleReturnsCorrectCalories() {
        $caloriesFile = __DIR__ . '/exampleInput.txt';
        $caloriesCounter = new CaloriesCounter();
        $this->assertEquals(24000,$caloriesCounter->__invoke(file_get_contents($caloriesFile)));
    }
    /**
     * @test
     */
    public function assertOwnInputReturnsCorrectCalories() {
        $caloriesFile = __DIR__ . '/input.txt';
        $caloriesCounter = new CaloriesCounter();
        $this->assertEquals(70369,$caloriesCounter->__invoke(file_get_contents($caloriesFile)));
    }
}