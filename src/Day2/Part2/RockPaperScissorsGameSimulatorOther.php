<?php

namespace App\Day2\Part2;

class RockPaperScissorsGameSimulatorOther
{
    private const ROCK = 'ROCK';
    private const PAPER = 'PAPER';
    private const SCISSORS = 'SCISSORS';

    private const LOSE = 'LOSE';
    private const DRAW = 'DRAW';
    private const WIN = 'WIN';

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
        ];

    private const HOW_SHOULD_ROUND_END = [
        'X' => self::LOSE,
        'Y' => self::DRAW,
        'Z' => self::WIN,
    ];

    private const ROUND_VALUES = [
        self::LOSE => 0,
        self::DRAW => 3,
        self::WIN => 6,
    ];

    public function __invoke(string $gamePlaning)
    {
        $totalScore = 0;
        $rounds = explode("\n", $gamePlaning);
        foreach ($rounds as $round) {
            $playerShapes = explode(" ", $round);
            $otherPlayerChoice = self::SHAPE_BY_LETTER[$playerShapes[0]];
            $howShouldRoundEnd = self::HOW_SHOULD_ROUND_END[$playerShapes[1]];
            $myChoice = $this->whatShouldITakeToEndAsExpected($otherPlayerChoice, $howShouldRoundEnd);
            $roundScore = self::ROUND_VALUES[$howShouldRoundEnd] + self::SCORES[$myChoice];
            $totalScore += $roundScore;
        }
        return $totalScore;
    }

    private function whatShouldITakeToEndAsExpected(string $otherPlayerChoice, string $howShouldRoundEnd): string
    {

        if ($howShouldRoundEnd === self::WIN) {
            switch ($otherPlayerChoice) {
                case self::PAPER:
                    return self::SCISSORS;
                case self::SCISSORS:
                    return self::ROCK;
                case self::ROCK:
                    return self::PAPER;
            }
        }
        if ($howShouldRoundEnd === self::LOSE) {
            switch ($otherPlayerChoice) {
                case self::SCISSORS :
                    return self::PAPER;
                case self::ROCK :
                    return self::SCISSORS;
                case self::PAPER :
                    return self::ROCK;
            }
        }
        return $otherPlayerChoice;

    }


}