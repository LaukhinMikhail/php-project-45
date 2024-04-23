<?php

namespace BrainGames\Engine\Calc;

use function BrainGames\Cli\getName as getName;
use function BrainGames\Engine\getMaximumMovesNumber as getMaximumMovesNumber;
use function BrainGames\Engine\showSuccesfulGameEnding as showSuccesfulGameEnding;
use function BrainGames\Engine\getResponse as getResponse;
use function BrainGames\Engine\isResponseCorrect as isResponseCorrect;
use function BrainGames\Engine\showFailMessage as showFailMessage;

// Путь который будет использован при глобальной установке пакета
$autoloadPath1 = __DIR__ . '/../../../autoload.php';

// Путь для локальной работы с проектом
$autoloadPath2 = __DIR__ . '/../../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

$name = getName();
$movesCount = getMaximumMovesNumber();
$iterationNumber = 0;
$operands = ['+', '-', '*'];

print_r("What is the result of the expression?\n");

while ($iterationNumber <= $movesCount) {
    if ($iterationNumber === $movesCount) {
        showSuccesfulGameEnding($name);
        break;
    }
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
    print_r("Question: {$randomNumber1} {$currentOperand} {$randomNumber2}.");
    $actualResponse = getResponse();

    if (isResponseCorrect($actualResponse, $currentResponse)) {
        $iterationNumber++;
    } else {
        showFailMessage($name, $actualResponse, $currentResponse);
        break;
    }
}
