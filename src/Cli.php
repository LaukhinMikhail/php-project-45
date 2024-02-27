<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

// Путь который будет использован при глобальной установке пакета
$autoloadPath1 = __DIR__ . '/../../../autoload.php';

// Путь для локальной работы с проектом
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}
function greeting()
{
    line('Welcome to the Brain Game!');
}

function getName()
{
    greeting();
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
