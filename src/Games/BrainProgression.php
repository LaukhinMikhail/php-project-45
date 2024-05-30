<?php

namespace BrainGames\Engine\Progressison;

function getProgression()
{
    $result = [];
    $porgressionLenght = rand(5, 10);
    $hidenElementPosition = rand(0, $porgressionLenght - 1);
    $progressionStep = rand(2, 50);
    $firstElement = rand(2, 30);
    $progression = [];
    $progression[] = $firstElement;

    for ($i = 0; $i <= $porgressionLenght - 1; $i++) {
        $firstElement += $progressionStep;
        $progression[] = $firstElement;
    }

    $currentResponse = $progression[$hidenElementPosition];
    $progression[$hidenElementPosition] = '..';
    $progression = implode(' ', $progression);
    $result['question'] = $progression;
    $result['response'] = $currentResponse;
    return $result;
}
