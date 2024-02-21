<?php

//namespace BrainGames\Engine;


function isResponseCorrect($actualResponse, $currentResponse)
{
    if ($actualResponse == $currentResponse) {
        //print_r("Current!\n");
        return true;
    }
    else {
        return false;
    }
}

function showFailMessage($name, $actualResponse, $currentResponse)
{
    return print_r("\"{$actualResponse}\" is wrong answer ;(. Correct answer was \"{$currentResponse}\".\nLet's try again, {$name}!\n");
}

function showSuccesfulGameEnding($name)
{
    return print_r("Congratulations, " . $name . "!\n");
}

function getResponse()
{
    return trim(fgets(STDIN));
}

function greeting()
{
    echo "May I have your name?\n";

    $name = trim(fgets(STDIN));
    echo "Hello, {$name}!\n";

    return $name;
}

function getMaximumMovesNumber()
{
    return 3;
}

function generateRemainderOfDivision()
{
    $randomNumber = rand(1, 99);
    print_r ("Question: " . $randomNumber . "\n" . "Your answer: " . "\n");
    $currentResponse = $randomNumber % 2 === 0 ? 'Yes' : 'No';
    return $currentResponse;
}

function generateCalc()
{
    $operands = ['+', '-', '*'];
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

    print_r ("Question: " . $randomNumber1 . $operands[$numOperand] . $randomNumber2 . ". Your answer: " . "\n");
    return $currentResponse;
}

function generateGCD()
{
    $randomNumber1 = rand(1, 99);
    $randomNumber2 = rand(1, 99);

    print_r ("Question: " . $randomNumber1 . " " . $randomNumber2 . ". Your answer: " . "\n");

    $gcd = $randomNumber1 <= $randomNumber2 ? $randomNumber1 : $randomNumber2; //Находим правильный ответ и возвращаем
    while (!($randomNumber1 % $gcd === 0 && $randomNumber2 % $gcd === 0)) {
        $gcd--;
    }
    return $gcd;
}

function generateProgression()
{
    $porgressionLenght = rand(5, 10);
    $hidenElementPosition = rand(0, $porgressionLenght - 1);
    $progressionStep = rand(2, 50);
    $firstElement = rand(2, 30);
    $progression = [];
    $progression[] = $firstElement;

    for($i = 0; $i <= $porgressionLenght - 1; $i++) {
        $firstElement += $progressionStep;
        $progression[] = $firstElement;
    }
    $currentResponse = $progression[$hidenElementPosition];
    $progression[$hidenElementPosition] = '..';
    print_r ("Question: " . implode(' ', $progression) . ".\nYour answer: ");
    return $currentResponse;
}