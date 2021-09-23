<?php
include_once "Shape.php";
class Rectangle extends Shape implements Resizeable
{
    public int $width;
    public int $height;

   public function __construct(string $name,
                                        int $width,
                                        int $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): int
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter(): int
    {
        return ($this->height + $this->width) * 2;
    }
    public function resize()
    {
        $percen = rand(1,100)*0.01;
        $AreaNew = $this->calculateArea()*$percen + $this->calculateArea();
        $PerimeterNew = $this->calculatePerimeter()*$percen + $this->calculatePerimeter();
        return "chu vi sau khi resize la: ".$PerimeterNew." -dien tich sau khi resize la : ".$AreaNew;
    }
}