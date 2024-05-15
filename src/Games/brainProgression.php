<?php

namespace BrainGames\Engine\Progresison;

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

print_r("What number is missing in the progression?\n");

$movesCount = getMaximumMovesNumber();
$iterationNumber = 0;

while ($iterationNumber <= $movesCount) {
    if ($iterationNumber === $movesCount) {
        showSuccesfulGameEnding($name);
        break;
    }
    $porgressionLenght = rand(5, 10);
    $hidenElementPosition = rand(0, $porgressionLenght - 1);
    $progressionStep = rand(2, 50);
    $firstElement = rand(2, 30);
    $progression = [];
    $progression[] = $firstElement;

    for ($i = 0; $i <= $porgressionLenght - 1; $i++) {
        $firstElement += $progressionStep;
        $progression[] = $firstElement;
    }
    $currentResponse = $progression[$hidenElementPosition];
    $progression[$hidenElementPosition] = '..';
    $stringProgression = implode(' ', $progression);
    print_r("Question: {$stringProgression}\n");
    $actualResponse = getResponse();

    if (isResponseCorrect($actualResponse, $currentResponse)) {
        $iterationNumber++;
    } else {
        showFailMessage($name, $actualResponse, $currentResponse);
        break;
    }
}
