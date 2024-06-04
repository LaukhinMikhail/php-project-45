<?php

namespace BrainGames\Engine\Even;

function getEvenGameData(int $movesCount)
{
    $result = [];

    for ($i = 0; $i < $movesCount; $i++) {
        $randomNumber = rand(1, 99);
        $currentResponse = isNumEven($randomNumber);
        $result[] = ['question' => $randomNumber, 'response' => $currentResponse];
    }
    return $result;
}

function isNumEven($number)
{
    return $number % 2 === 0 ? 'yes' : 'no';
}
