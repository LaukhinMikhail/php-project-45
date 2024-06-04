<?php

namespace BrainGames\Engine\Prime;

function getPrimeNum()
{
    $result = [];
    $randomNumber = rand(2, 99);
    $currentResponse = isPrime($randomNumber);
    $result['question'] = $randomNumber;
    $result['response'] = $currentResponse;
    return $result;
}

function isPrime($number)
{
    $gcd = $number - 1;
    while ($number % $gcd !== 0) {
        $gcd--;
    }
    $result = $gcd === 1 ? 'yes' : 'no';
    return $result;
}