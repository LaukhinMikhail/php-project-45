<?php

namespace BrainGames\Engine\Prime;

function getPrimeNum()
{
    $result = [];
    $randomNumber = rand(2, 99);
    $gcd = $randomNumber - 1;
    while ($randomNumber % $gcd != 0) {
        $gcd--;
    }
    $currentResponse = $gcd === 1 ? 'yes' : 'no';
    $result['question'] = $randomNumber;
    $result['response'] = $currentResponse;
    return $result;
}
