<?php
include_once "Resizeable.php";
include_once "Shape.php";
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";


 $shape[0] = new Circle("Circle",5);
 $shape[1] = new Rectangle("Rectangle",4,6);
 $shape[2] = new Square("Square",7);
 foreach ($shape as $shape){
     echo "---Shape Old----"."<br>";
     echo $shape->show() . "</br>";
     echo "chu vi: ".$shape->calculatePerimeter() ."</br>";
     echo "dien tich: ". $shape->calculateArea() ."</br>";
     echo "----Shape New---" ."</br>";
     echo $shape->resize()."<br>";
 }

