<?php

namespace BrainGames\Engine\Even;

function getEven()
{
    $result = [];
    $randomNumber = rand(1, 99);
    $currentResponse = $randomNumber % 2 === 0 ? 'yes' : 'no';
    $result['question'] = $randomNumber;
    $result['response'] = $currentResponse;
    return $result;
}
