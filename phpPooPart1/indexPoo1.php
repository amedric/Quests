<?php

require_once 'classPoo1.php';

$bike = new Bicycle('blue',15,1,2, false);

echo $bike->forward(15);
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();



$car = new Cars('yellow', 5, 'petrol');

echo $car->carForward(25);
echo '<br> Vitesse du vélo : ' . $car->currentCarSpeed . ' km/h' . '<br>';
echo $car->carBrake();
echo '<br> Vitesse du vélo : ' . $car->currentCarSpeed . ' km/h' . '<br>';
echo $car->carBrake();

?>
