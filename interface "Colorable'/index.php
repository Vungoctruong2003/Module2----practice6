<?php
include_once "Colorable.php";
include_once "Shape.php";
include_once "Square.php";

$shape[0] = new Square("Square",7);
foreach ($shape as $shape){
    echo $shape->show()."</br>";
    echo " Dien tich la: ".$shape->calculateArea()."</br>";
    echo " Chu vi la: ". $shape->calculatePerimeter()."</br>";
    echo $shape->howToColor();

}
