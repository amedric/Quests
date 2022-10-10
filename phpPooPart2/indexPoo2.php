<?php

require_once 'bicycle.php';

$truck = new Trucks('green', 3,100,'diesel');

echo $truck->load(50);
echo $truck->fillLoad();

echo $truck->drive(10);
echo '<br> Speed of truck : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Speed of truck : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();

?>

