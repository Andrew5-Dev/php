<?php

namespace hw15;

use Exception;

class Circle extends Figure
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->setRadius($radius);
        $this->radius = $radius;
    }

    /**
     * @param float $radius
     * @throws Exception
     */
    public function setRadius(float $radius): void
    {
        if ($radius < 0) {
            throw new Exception("Радіус має бути більше 0!");
        }
        $this->radius = $radius;
    }
    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter()
    {
        return 2 * pi() * $this->radius;
    }

}