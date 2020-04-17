<?php
require_once 'Car.php'; //подключили

// создали объект
$car1 = new Car;
$car2 = new Car; // создали второй объект 
// print_r($car1);

$car1->color = "black"; // а сдесь задали парметры объектам "color" и "brand"
$car1->brand = "bmw";
$car1->year = 1995;
//$car1->speed = 200; так же мы сдесь можем поменять парметры , заданные в классе 
// print_r($car1);

$car2->color = "red";
$car2->wheels = "6";
$car2->speed = "500";
$car2->brand = "WV";
$car2->year = 2020;

// print_r($car2);

// выводим абранное
echo "<h3>About my car:</h3>
Brand: {$car2->brand}<br>
Color: {$car2->color}<br>
Wheels: {$car2->wheels}<br>
Year: {$car2->year}<br>
Speed: {$car2->speed}<br>";
