<?php

require_once "Classes/Car.php";

$car = new Car("BMW", "green", "169", "2000");
echo $car->show();
$car->save();