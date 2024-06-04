<?php

namespace BrainGames\Engine\Progressison;

function getProgressionGameData(int $movesCount)
{
    $result = [];

    for ($i = 0; $i < $movesCount; $i++) {
        $progressionLenght = rand(5, 10);
        $hidenElementPosition = rand(0, $progressionLenght - 1);
        $progressionStep = rand(2, 50);
        $firstElement = rand(2, 30);
        $progression = [];
        $progression[] = $firstElement;

        for ($j = 0; $j <= $progressionLenght - 1; $j++) {
            $firstElement += $progressionStep;
            $progression[] = $firstElement;
        }

        $currentResponse = $progression[$hidenElementPosition];
        $progression[$hidenElementPosition] = '..';
        $progression = implode(' ', $progression);
        $result[] = ['question' => $progression, 'response' => $currentResponse];
    }
    return $result;
}
