<?php

namespace BrainGames\Engine\Calc;

function getCalc()
{
    $result = [];
    $operands = ['+', '-', '*'];
    $randomNumber1 = rand(1, 99);
    $randomNumber2 = rand(1, 99);
    $numOperand = rand(0, 2);
    switch ($numOperand) {
        case 0:
            $currentResponse = $randomNumber1 + $randomNumber2;
            break;
        case 1:
            $currentResponse = $randomNumber1 - $randomNumber2;
            break;
        case 2:
            $currentResponse = $randomNumber1 * $randomNumber2;
            break;
    }
    $currentOperand = $operands[$numOperand];
    $result['question'] = "{$randomNumber1} {$currentOperand} {$randomNumber2}.";
    $result['response'] = $currentResponse;
    return $result;
}
