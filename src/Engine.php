
<?php
/*

namespace BrainGames\Engine;

Так как все функции проекта описаны в настоящем файле и больше нигде,
было решено отказаться от неймспейса в угоду удобству
С другой стороны, я понимаю, что в настоящем проекте этот неймспейс был бы необходим,
так как в дальнейшем перерабатывать существующий код
было бы сложнее (когда появилось множество новой логики и пространств имен)

*/

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
    $response = trim(fgets(STDIN));
    return $response;
}

function showGreetingMessage()
{
    echo "Welcome to the Brain Games!\n";
}

function getName(): string|bool
{
    echo "May I have your name?\n";
    $name = trim(fgets(STDIN));
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
    print_r("Question: {$randomNumber}\nYour answer: \n");
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
    print_r("Question: {$randomNumber1} {$currentOperand} {$randomNumber2}. Your answer: \n");
    return $currentResponse;
}

function generateGCD()
{
    $randomNumber1 = rand(1, 99);
    $randomNumber2 = rand(1, 99);
    print_r("Question: {$randomNumber1} {$randomNumber2}. Your answer: \n");
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
    print_r("Question: {$stringProgression}\nYour answer: ");
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
    print_r("Question: {$randomNumber}\nYour answer: ");
    return $currentResponse;
}
