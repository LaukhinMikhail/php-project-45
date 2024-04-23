<?php

namespace BrainGames\Engine;

use function cli\prompt;

function isResponseCorrect(string|int $actualResponse, string|int $currentResponse)
{
    if ($actualResponse == $currentResponse) {
        print_r("Correct!\n");
        return true;
    } else {
        return false;
    }
}

function showFailMessage(string $name, string|int $actualResponse, string|int $currentResponse)
{
    return print_r("\"{$actualResponse}\" is wrong answer ;(. Correct answer was \"{$currentResponse}\".\nLet's try again, {$name}!\n");
}

function showSuccesfulGameEnding(string $name)
{
    return print_r("Congratulations, {$name}!\n");
}

function getResponse()
{
    $response = prompt('Your answer');
    return $response;
}

function showGreetingMessage()
{
    echo "Welcome to the Brain Games!\n";
}

function getName()
{
    $name = prompt("May I have your name?\n", false, "");
    echo "Hello, {$name}!\n";
    echo "Welcome to the Brain Games!\n";
    return $name;
}

function getMaximumMovesNumber()
{
    return 3;
}
