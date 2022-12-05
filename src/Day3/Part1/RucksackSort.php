<?php

namespace App\Day3\Part1;

class RucksackSort
{
    private int $lowerCaseAssiDifference = 96;
    private int $upperCaseAssiDifference = 38;


    public function __invoke(string $input): int
    {
        $rucksacks = explode("\n", $input);
        $priorityTotal = 0;
        foreach ($rucksacks as $rucksack) {
            $rucksackList = str_split($rucksack);
            $rucksackList = array_chunk($rucksackList, count($rucksackList)/2);
            $repeatedChars = array_intersect($rucksackList[0], $rucksackList[1]);
            $repeatedChar = reset($repeatedChars);
            if (ctype_upper($repeatedChar)) {
                $priorityTotal+= ord($repeatedChar) - $this->upperCaseAssiDifference;
            } else {
                $priorityTotal+= ord($repeatedChar) - $this->lowerCaseAssiDifference;
            }
        }
        return $priorityTotal;
    }

}