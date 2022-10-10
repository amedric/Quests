<?php

require_once 'classPoo1.php';

$bmx = new Bicycle('blue',15,1,2, false);

echo $bmx->forward(15);
echo '<br> Vitesse du vélo : ' . $bmx->getcurrentSpeed() . ' km/h' . '<br>';
echo $bmx->brake();
echo '<br> Vitesse du vélo : ' . $bmx->getcurrentSpeed() . ' km/h' . '<br>';
echo $bmx->brake();



$ferrari = new Cars('yellow', 5, 'petrol');

echo $ferrari->carStart();
echo '<br> Vitesse de la voiture : ' . $ferrari->getCurrentSpeed() . ' km/h' . '<br>';
echo $ferrari->carForward(25);
echo '<br> Vitesse de la voiture : ' . $ferrari->getCurrentSpeed() . ' km/h' . '<br>';
echo $ferrari->carBrake();
echo '<br> Vitesse de la voiture : ' . $ferrari->getCurrentSpeed() . ' km/h' . '<br>';
echo $ferrari->carBrake();

?>
