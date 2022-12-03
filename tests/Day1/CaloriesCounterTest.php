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
        $calories =
            "1000
2000
3000

4000

5000
6000

7000
8000
9000

10000";
        $caloriesCounter = new CaloriesCounter();
        $this->assertEquals(24000,$caloriesCounter->__invoke($calories));
    }
}