<?php

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

function getResponse(): string|bool
{
    $response = prompt('');
    return $response;
}

function showGreetingMessage()
{
    echo "Welcome to the Brain Games!\n";
}

function getName(): string|bool
{
    /*
    echo "May I have your name?\n";
    $name = trim(fgets(STDIN));
    echo "Hello, {$name}!\n";
    echo "Welcome to the Brain Games!\n";
    */
    //echo "May I have your name?\n";
    $name = prompt("May I have your name?\n");
    echo "Hello, {$name}!\n";
    echo "Welcome to the Brain Games!\n";
    return $name;
}

function getMaximumMovesNumber()
{
    return 3;
}

function generateRemainderOfDivision()
{
    $randomNumber = rand(1, 99);
    print_r("Question: {$randomNumber}\nYour answer");
    $currentResponse = $randomNumber % 2 === 0 ? 'yes' : 'no';
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
    $currentOperand = $operands[$numOperand];
    print_r("Question: {$randomNumber1} {$currentOperand} {$randomNumber2}. Your answer");
    return $currentResponse;
}

function generateGCD()
{
    $randomNumber1 = rand(1, 99);
    $randomNumber2 = rand(1, 99);
    print_r("Question: {$randomNumber1} {$randomNumber2}. Your answer");
    $gcd = $randomNumber1 <= $randomNumber2 ? $randomNumber1 : $randomNumber2; //Находим НОД и возвращаем
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

    for ($i = 0; $i <= $porgressionLenght - 1; $i++) {
        $firstElement += $progressionStep;
        $progression[] = $firstElement;
    }
    $currentResponse = $progression[$hidenElementPosition];
    $progression[$hidenElementPosition] = '..';
    $stringProgression = implode(' ', $progression);
    print_r("Question: {$stringProgression}\nYour answer");
    return $currentResponse;
}

function generateSimpleNum()
{
    $randomNumber = rand(2, 99);
    $gcd = $randomNumber - 1;
    while ($randomNumber % $gcd != 0) {
        $gcd--;
    }
    $currentResponse = $gcd === 1 ? 'yes' : 'no';
    print_r("Question: {$randomNumber}\nYour answer");
    return $currentResponse;
}
