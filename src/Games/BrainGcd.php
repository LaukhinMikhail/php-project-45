<?php

namespace BrainGames\Engine\Gcd;

function getGcdGameData($movesCount)
{
    $result = [];

    for ($i = 0; $i < $movesCount; $i++) {
        $randomNumber1 = rand(1, 99);
        $randomNumber2 = rand(1, 99);
        $gcd = $randomNumber1 <= $randomNumber2 ? $randomNumber1 : $randomNumber2; //Находим НОД
        while (!($randomNumber1 % $gcd === 0 && $randomNumber2 % $gcd === 0)) {
            $gcd--;
        }
        $result[] = ['question' => "{$randomNumber1} {$randomNumber2}", 'response' => $gcd];
    }
    return $result;
}
