<?php

require_once 'Car.php';
require_once 'Bicycle.php';

$break = new Car('red',8,'fuel');
$rockrider = new Bicycle('brown', 1);


                    /**  Lumières  **/

echo "Car lights : " . $break->switchOff() . "<br>";
// var_dump($break->switchOff());
echo "Vitesse: " . $rockrider->forward(9) . "<br>";
echo "il fait sombre, " . $rockrider->switchOn() . "<br>";
var_dump($break->switchOff());
var_dump($rockrider->switchOff());
?>
