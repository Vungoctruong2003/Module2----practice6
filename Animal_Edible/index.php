<?php
include_once "Tiger.php";
include_once "Chicken.php";
include('Apple.php');
include('Orange.php');


echo "----Animal---- </br>";
$animal[0] = new Tiger();
$animal[1] = new Chicken();
foreach ($animal as $animal){
    echo $animal->makeSound() ."</br>";
    if ($animal instanceof Chicken){
       echo $animal->howtoEat() ."</br>";
    }
}


echo('---- Fruits<br>');

$fruits[0] = new Apple();
$fruits[1] = new Orange();

foreach ($fruits as $fruit) {
    echo $fruit->howToEat() . '<br>';
}
