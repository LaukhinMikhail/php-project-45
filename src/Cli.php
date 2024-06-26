<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function getName()
{
    line('Welcome to the Brain Games!');
    $name = prompt("May I have your name?\n", false, "");
    line("Hello, %s!", $name);
    return $name;
}
