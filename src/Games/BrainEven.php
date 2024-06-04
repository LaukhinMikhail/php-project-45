<?php

namespace BrainGames\Engine\Even;

function getEven()
{
    $result = [];
    $randomNumber = rand(1, 99);
    $currentResponse = isNumEven($randomNumber);
    $result['question'] = $randomNumber;
    $result['response'] = $currentResponse;
    return $result;
}

function isNumEven($number)
{
    return $number % 2 === 0 ? 'yes' : 'no';
}