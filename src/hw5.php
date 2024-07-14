<?php

echo "Enter Radius " . PHP_EOL;
$radius = (float)fgets(STDIN);
function area (float $radius): float
{
    return  pi() * pow($radius, 2);
}

$result = area($radius);
echo "Area of Circle is $result" . PHP_EOL;



echo "Enter number 1 " . PHP_EOL;
$number1 = (int)fgets(STDIN);
echo "Enter number 2" . PHP_EOL;
$number2 = (int)fgets(STDIN);

function exponentiation (int $number1, int $number2): int
{
    return  $number1 ** $number2;
}

$exponentNumber = exponentiation($number1, $number2);
echo "Exponentiation is $exponentNumber" . PHP_EOL;




echo "Enter number 3 " . PHP_EOL;
$number3 = (int)fgets(STDIN);


function exponentiation2 (int $exponentNumber, int $number3): int
{
    return  $exponentNumber ** $number3;
}

$exponentNumber = exponentiation2($exponentNumber, $number3);
echo "Exponentiation is $exponentNumber" . PHP_EOL;
