<?php

namespace App\Tests\Day2\Part1;

use App\Day2\Part1\RockPaperScissorsGameSimulator;
use PHPUnit\Framework\TestCase;

class RockPaperScissorsGameSimulatorTest extends TestCase
{
    /**
     * @test
     */
    public function assertExampleReturnsCorrectCalories() {
        $file = __DIR__ . '/exampleInput.txt';
        $gameSimulator = new RockPaperScissorsGameSimulator();
        $this->assertEquals(15,$gameSimulator->__invoke(file_get_contents($file)));
    }

    /**
     * @test
     */
    public function assertOwnInputReturnsCorrectCalories() {
        $file = __DIR__ . '/input.txt';
        $gameSimulator = new RockPaperScissorsGameSimulator();
        $this->assertEquals(11767,$gameSimulator->__invoke(file_get_contents($file)));
    }
}