<?php


require_once 'Bicycle.php';
$bike = new Bicycle('yellow');
//var_dump($bike);

//var_dump($bike); // then, another dump.

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

//var_dump($bike);
//$bike->dump();


require_once 'Car.php';
$car = new Car('red', 5, 'fuel');

//attribu privé $car->color = 'dark';
// attribu privé  $car->currentSpeed=130;

// Moving Car
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();



//var_dump($car);





?>