<?php

namespace BrainGames\Engine\Calc;

function getCalc()
{
    $result = [];
    $operands = ['+', '-', '*'];
    $randomNumber1 = rand(1, 99);
    $randomNumber2 = rand(1, 99);
    $numOperand = rand(0, 2);
    $currentResponse = calculate($randomNumber1, $randomNumber2, $numOperand);
    $currentOperand = $operands[$numOperand];
    $result['question'] = "{$randomNumber1} {$currentOperand} {$randomNumber2}.";
    $result['response'] = $currentResponse;
    return $result;
}
function calculate($num1, $num2, $operand)
{
    switch ($operand) {
        case 0:
            $result = $num1 + $num2;
            break;
        case 1:
            $result = $num1 - $num2;
            break;
        case 2:
            $result = $num1 * $num2;
            break;
    }
    return $result;
}