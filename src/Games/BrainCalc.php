<?php

namespace BrainGames\Engine\Calc;

// Путь который будет использован при глобальной установке пакета
$autoloadPath1 = __DIR__ . '/../../../autoload.php';

// Путь для локальной работы с проектом
$autoloadPath2 = __DIR__ . '/../../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function BrainGames\Cli\getName;
use function BrainGames\Engine\getMaximumMovesNumber;
use function BrainGames\Engine\showSuccesfulGameEnding;
use function BrainGames\Engine\getResponse;
use function BrainGames\Engine\isResponseCorrect;
use function BrainGames\Engine\showFailMessage;
use function cli\line;

function getCalcGameData()
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

function startGame($description, callable $gameFunc)
{
    //getGamePreview($description);
    $movesCount = 3;

    for ($i = 0; $i < $movesCount; $i++) {
        $gameFunc();
    }
    if ($gameResult === true) {
        showSuccesfulGameEnding($name);
    }
}


//startGame('Описание игры', getCalcGameData());
