<?php

echo "Enter number 1 " . PHP_EOL;
$number1 = (int)fgets(STDIN);
echo "Enter number 2" . PHP_EOL;
$number2 = (int)fgets(STDIN);


function multiplication (int &$number1, int $number2, ?Closure $closure = null)
{
    $number1 = $number1 * $number2;
    if ($closure !== null) {
        return $closure($number1);
    }
        return $number1;
}

$closure = function ($number1)  {
    echo "Closure is $number1" . PHP_EOL;
};

$sum = multiplication($number1, $number2, $closure);


