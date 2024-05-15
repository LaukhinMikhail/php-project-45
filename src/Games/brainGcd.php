<?php

namespace BrainGames\Engine\Gcd;

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

print_r("Find the greatest common divisor of given numbers.\n");

$movesCount = getMaximumMovesNumber();
$iterationNumber = 0;

while ($iterationNumber <= $movesCount) {
    if ($iterationNumber === $movesCount) {
        showSuccesfulGameEnding($name);
        break;
    }
    $randomNumber1 = rand(1, 99);
    $randomNumber2 = rand(1, 99);
    print_r("Question: {$randomNumber1} {$randomNumber2}.");
    $gcd = $randomNumber1 <= $randomNumber2 ? $randomNumber1 : $randomNumber2; //Находим НОД
    while (!($randomNumber1 % $gcd === 0 && $randomNumber2 % $gcd === 0)) {
        $gcd--;
    }
    $currentResponse = $gcd;
    $actualResponse = getResponse();

    if (isResponseCorrect($actualResponse, $currentResponse)) {
        $iterationNumber++;
    } else {
        showFailMessage($name, $actualResponse, $currentResponse);
        break;
    }
}
