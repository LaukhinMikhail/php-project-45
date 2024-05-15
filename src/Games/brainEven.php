<?php

namespace BrainGames\Engine\Even;

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

print_r("Answer \"yes\" if the number is even, otherwise answer \"no\".\n");

while ($iterationNumber <= $movesCount) {
    if ($iterationNumber === $movesCount) {
        showSuccesfulGameEnding($name);
        break;
    }
    $randomNumber = rand(1, 99);
    print_r("Question: {$randomNumber}\n");
    $currentResponse = $randomNumber % 2 === 0 ? 'yes' : 'no';
    $actualResponse = getResponse();

    if (isResponseCorrect($actualResponse, $currentResponse)) {
        $iterationNumber++;
    } else {
        showFailMessage($name, $actualResponse, $currentResponse);
        break;
    }
}
