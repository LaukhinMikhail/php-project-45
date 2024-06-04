<?php

namespace BrainGames\Engine\Prime;

function getPrimeGameData(int $movesCount)
{
    $result = [];
    for ($i = 0; $i < $movesCount; $i++) {
        $randomNumber = rand(2, 99);
        $currentResponse = isPrime($randomNumber);
        $result[] = ['question' => $randomNumber, 'response' => $currentResponse];
    }
    return $result;
}

function isPrime(int $number)
{
    $gcd = $number - 1;
    while ($number % $gcd !== 0) {
        $gcd--;
    }
    $result = $gcd === 1 ? 'yes' : 'no';
    return $result;
}
