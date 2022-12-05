<?php

namespace App\Tests\Day3\Part1;

use App\Day3\Part1\RucksackSort;
use PHPUnit\Framework\TestCase;

class RucksackSortTest extends TestCase
{
    /**
     * @test
     */
    public function assertExampleReturnsCorrectCalories() {
        $file = __DIR__ . '/exampleInput.txt';
        $useCase = new RucksackSort();
        $this->assertEquals(157,$useCase->__invoke(file_get_contents($file)));
    }
    /**
     * @test
     */
    public function assertOwnInputReturnsCorrectCalories() {
        $file = __DIR__ . '/input.txt';
        $useCase = new RucksackSort();
        $this->assertEquals(7821,$useCase->__invoke(file_get_contents($file)));
    }
}