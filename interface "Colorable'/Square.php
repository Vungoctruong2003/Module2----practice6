<?php
include_once "Shape.php";

class Square extends Shape implements Colorable
{
    public int $width;

    public function __construct(string $name,
                                int    $width)

    {
        parent::__construct($name);
        $this->width = $width;
    }

    public function calculateArea(): int
    {
        return $this->width * $this->width;
    }

    public function calculatePerimeter(): int
    {
        return $this->width * 4;
    }

    public function howToColor()
    {
        return "Color all four sides..";
    }
}