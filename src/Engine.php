<?php

namespace BrainGames\Engine;

function greeting()
{
    echo "May I have your name?\n";

    $name = trim(fgets(STDIN));
    echo "Hello, {$name}!\n";

    return $name;
}

function brainEven()
{
    
    
    print_r ("Welcome to the Brain Games!
Answer \"yes\" if the number is even, otherwise answer \"no\".
\n\n");

    $trueCount = 0;
    $movesNum = 3;

    while ($trueCount < $movesNum) {
        $randomNumber = rand(1, 99);
        $currentResponse = $randomNumber % 2 === 0 ? 'Yes' : 'No';
        print_r ("Question: " . $randomNumber . "\n" . "Your answer: " . "\n");

        $response = trim(fgets(STDIN));
        if ($response != $currentResponse) {
            return print_r("\"{$response}\" is wrong answer ;(. Correct answer was \"{$currentResponse}\".\nLet's try again, {$name}!\n");
        }

    $trueCount++;
    }
    print_r ("Congratulations, " . $name . "!\n");
}
