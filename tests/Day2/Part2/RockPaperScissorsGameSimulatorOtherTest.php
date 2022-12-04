<?php

namespace App\Tests\Day2\Part2;

use App\Day2\Part2\RockPaperScissorsGameSimulatorOther;
use PHPUnit\Framework\TestCase;

class RockPaperScissorsGameSimulatorOtherTest extends TestCase
{
    /**
     * @test
     */
    public function assertExampleReturnsCorrectCalories() {
        $file = __DIR__ . '/exampleInput.txt';
        $gameSimulator = new RockPaperScissorsGameSimulatorOther();
        $this->assertEquals(12,$gameSimulator->__invoke(file_get_contents($file)));
    }

    /**
     * @test
     */
    public function assertOwnInputReturnsCorrectCalories() {
        $file = __DIR__ . '/input.txt';
        $gameSimulator = new RockPaperScissorsGameSimulatorOther();
        $this->assertEquals(13886,$gameSimulator->__invoke(file_get_contents($file)));
    }
}