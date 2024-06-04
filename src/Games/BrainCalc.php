<?php

namespace BrainGames\Engine\Calc;

function getCalcGameData(int $movesCount)
{
    $result = [];
    $operands = ['+', '-', '*'];

    for ($i = 0; $i < $movesCount; $i++) {
        $randomNumber1 = rand(1, 99);
        $randomNumber2 = rand(1, 99);
        $operand = $operands[rand(0, 2)];
        $currentResponse = calculate($randomNumber1, $randomNumber2, $operand);
        $result[] = ['question' => "{$randomNumber1} {$operand} {$randomNumber2}.", 'response' => $currentResponse];
    }
    return $result;
}
function calculate(int $num1, int $num2, string $operand)
{
    $result = null;
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
