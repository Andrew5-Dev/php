<?php

echo "What is your name?\n";
$name = trim(fgets(STDIN));

echo "Hello, $name!\nI am good to meet you!\n";

echo "Enter Number 1\n";
$number1 = (int)fgets(STDIN);

echo "Enter Number 2\n";
$number2 = (int)fgets(STDIN);

echo "Sum = " . ($number1 + $number2) . "\n";
echo "Average Arithmetic = " . ($number1 + $number2) / 2 . "\n";
