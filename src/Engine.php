<?php

namespace BrainGames\Engine;

use function cli\prompt;
use function cli\line;

function isResponseCorrect(string|int $actualResponse, string|int $currentResponse)
{
    if ($actualResponse == $currentResponse) {
        line("Correct!");
        return true;
    } else {
        return false;
    }
}

function showFailMessage(string $name, string|int $actualResponse, string|int $currentResponse)
{
    return line("\"{$actualResponse}\" is wrong answer ;(. Correct answer was \"{$currentResponse}\".\n
    Let's try again, {$name}!");
}

function showSuccesfulGameEnding(string $name)
{
    return line("Congratulations, {$name}!");
}

function getResponse()
{
    $response = prompt('Your answer');
    return $response;
}

function showGreetingMessage()
{
    line("Welcome to the Brain Games!");
}

function getName()
{
    $name = prompt("May I have your name?\n", false, "");
    line("Hello, {$name}!");
    line("Welcome to the Brain Games!");
    return $name;
}

function getMaximumMovesNumber()
{
    return 3;
}

function startGame($description, $gameData)
{
    $gameResult = true;
    $name = getName();
    line($description);

    foreach ($gameData as $value) {
        $currentResponse = $value['response'];
        $question = $value['question'];
        line("Question: {$question}");
        $playerResponse = getResponse();
        if (isResponseCorrect($playerResponse, $currentResponse) === false) {
            showFailMessage($name, $playerResponse, $currentResponse);
            $gameResult = false;
            break;
        }
    }
    if ($gameResult === true) {
        showSuccesfulGameEnding($name);
    }
}
