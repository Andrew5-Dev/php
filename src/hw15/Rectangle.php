<?php

namespace hw15;

use Exception;

class Rectangle extends Figure
{
    private float $length;
    private float $width;

    public function __construct(float $length, float $width) {

        $this->setLength($length);
        $this->setWidth($width);
        $this->length = $length;
        $this->width = $width;
    }

    /**
     * @param float $length
     * @throws Exception
     */
    public function setLength(float $length): void
    {
        if ($length < 0) {
            throw new Exception("Довжина має бути більше 0!");
        }
        $this->length = $length;
    }

    /**
     * @param float $width
     * @throws Exception
     */
    public function setWidth(float $width): void
    {
        if ($width < 0) {
            throw new Exception("Ширина має бути більше 0!");
        }
        $this->width = $width;
    }
    public function getArea() {
        return $this->length * $this->width;
    }

    public function getPerimeter() {
        return 2 * ($this->length + $this->width);
    }
}