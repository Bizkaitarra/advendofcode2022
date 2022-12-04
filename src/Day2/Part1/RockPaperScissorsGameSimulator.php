<?php

namespace App\Day2\Part1;

class RockPaperScissorsGameSimulator
{
    private const ROCK = 'ROCK';
    private const PAPER = 'PAPER';
    private const SCISSORS = 'SCISSORS';

    private const SCORES =
        [
            self::ROCK => 1,
            self::PAPER => 2,
            self::SCISSORS => 3,
        ];

    private const SHAPE_BY_LETTER =
        [
            'A' => self::ROCK,
            'B' => self::PAPER,
            'C' => self::SCISSORS,
            'X' => self::ROCK,
            'Y' => self::PAPER,
            'Z' => self::SCISSORS,
        ];

    public function __invoke(string $gamePlaning)
    {
        $totalScore = 0;
        $rounds = explode("\n", $gamePlaning);
        foreach ($rounds as $round) {
            $playerShapes = explode(" ", $round);
            $otherPlayerChoice = self::SHAPE_BY_LETTER[$playerShapes[0]];
            $myChoice = self::SHAPE_BY_LETTER[$playerShapes[1]];
            $roundScore = $this->getRoundPointsByWinner($otherPlayerChoice, $myChoice) + self::SCORES[$myChoice];
            $totalScore += $roundScore;
        }
        return $totalScore;
    }

    private function getRoundPointsByWinner(string $otherPlayerChoice, string $myChoice): int {
        if ($otherPlayerChoice === $myChoice) {
            return 3;
        }

        if (
            $otherPlayerChoice === self::PAPER && $myChoice === self::SCISSORS ||
            $otherPlayerChoice === self::ROCK && $myChoice === self::PAPER ||
            $otherPlayerChoice === self::SCISSORS && $myChoice === self::ROCK
        ) {
            return 6;
        }
        return 0;
    }


}