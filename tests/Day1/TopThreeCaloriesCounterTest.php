<?php

namespace App\Tests;


use App\Day1\CaloriesCounter;
use App\Day1\TopThreeCaloriesCounter;
use PHPUnit\Framework\TestCase;

class TopThreeCaloriesCounterTest extends TestCase
{
    /**
     * @test
     */
    public function assertExampleReturnsCorrectCalories() {
        $caloriesFile = __DIR__ . '/exampleInput.txt';
        $caloriesCounter = new TopThreeCaloriesCounter();
        $this->assertEquals(45000,$caloriesCounter->__invoke(file_get_contents($caloriesFile)));
    }
    /**
     * @test
     */
    public function assertOwnInputReturnsCorrectCalories() {
        $caloriesFile = __DIR__ . '/input.txt';
        $caloriesCounter = new TopThreeCaloriesCounter();
        $this->assertEquals(203002,$caloriesCounter->__invoke(file_get_contents($caloriesFile)));
    }
}