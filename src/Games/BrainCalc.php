<?php

namespace BrainGames\Engine\Calc;

function getCalc()
{
    $result = [];
    $operands = ['+', '-', '*'];
    $randomNumber1 = rand(1, 99);
    $randomNumber2 = rand(1, 99);
    $operand = $operands[rand(0, 2)];
    $currentResponse = calculate($randomNumber1, $randomNumber2, $operand);
    $result['question'] = "{$randomNumber1} {$operand} {$randomNumber2}.";
    $result['response'] = $currentResponse;
    return $result;
}
function calculate($num1, $num2, $operand)
{
    switch ($operand) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
    }
    return $result;
}