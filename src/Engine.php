<?php

namespace BrainGames\Engine;

function greeting()
{
    echo "May I have your name?\n";

    $name = trim(fgets(STDIN));
    echo "Hello, {$name}!\n";

    return $name;
}

function gcd($num1, $num2)
{
    $gcd = $num1 <= $num2 ? $num1 : $num2;
    while (!($num1 % $gcd === 0 && $num2 % $gcd === 0)) {
        $gcd--;
        //print_r ("Первое число - {$num1}, второе число - {$num2}, делитель - ${gcd}\n");
    }
    return $gcd;
}