<?php
include_once "Shape.php";

class Circle extends Shape implements Resizeable
{
    public float $radius;

    public function __construct(string $name, float $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

   public function calculateArea(): float
    {
        return pi() * pow($this->radius, 2);
    }

   public function calculatePerimeter():float
    {
        return pi() * $this->radius * 2;
    }
    public function resize()
    {
        $percen = rand(1,100)*0.01;
        $AreaNew = $this->calculateArea()*$percen + $this->calculateArea();
        $PerimeterNew = $this->calculatePerimeter()*$percen + $this->calculatePerimeter();
        // TODO: Implement resize() method.
        return "chu vi sau khi resize la: ".$PerimeterNew." -dien tich sau khi resize la : ".$AreaNew;
    }

}