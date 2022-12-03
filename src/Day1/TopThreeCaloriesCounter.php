<?php

namespace App\Day1;

class TopThreeCaloriesCounter
{
    public function __invoke(string $calories)
    {
        $elfs = explode("\n\n", $calories);
        $caloriesByEachElf = [];

        if (count($elfs) < 3) {
            throw new \Exception('Not enough elfs');
        }

        foreach($elfs as $elf) {
            $elfCalories = 0;
            $caloriesByEachElf[] = array_sum((explode("\n", $elf)));
        }

        rsort($caloriesByEachElf);



        return $caloriesByEachElf[0] + $caloriesByEachElf[1] + $caloriesByEachElf[2];
    }
}