<?php

use hw15\Figure;
use hw15\Rectangle;
use hw15\Circle;
require_once __DIR__ . '/Figure.php';
require_once __DIR__ . '/Rectangle.php';
require_once __DIR__ . '/Circle.php';

echo "Введіть довжину прямокутника" . PHP_EOL;
$length = (float)fgets(STDIN);

echo "Введіть ширину прямокутника" . PHP_EOL;
$width = (float)fgets(STDIN);

echo "Введіть радіус кола" . PHP_EOL;
$radius = (float)fgets(STDIN);


try {
$rectangle = new Rectangle($length, $width);
$circle = new Circle($radius);

} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
    exit;
}
$figures = [$rectangle, $circle];

echo "Довжина прямокутника: " . $length . PHP_EOL;
echo "Ширина прямокутника: " . $width . PHP_EOL;
echo "Площа прямокутника: " . $rectangle->getArea() . PHP_EOL;
echo "Периметр прямокутника: " . $rectangle->getPerimeter() . PHP_EOL;
echo "Площа кола: " . $circle->getArea() . PHP_EOL;
echo "Периметр кола: " . $circle->getPerimeter() . PHP_EOL;

