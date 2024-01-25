<?php

namespace BrainGames\Cli;

echo "May I have your name?\n";

$name = trim(fgets(STDIN));
echo "Hello, {$name}!\n";