<?php

namespace App\Day1;

class CaloriesCounter
{
    public function __invoke(string $calories)
    {
        $elfs = explode("\n\n", $calories);
        $maxElfCalories = null;
        foreach($elfs as $elf) {
            $elfCalories = 0;
            foreach (explode("\n", $elf) as $elfItemCalories) {
                $elfCalories+= $elfItemCalories;
            }
            if ($maxElfCalories === null || $maxElfCalories < $elfCalories) {
                $maxElfCalories = $elfCalories;
            }

        }
        return $maxElfCalories;
    }

}