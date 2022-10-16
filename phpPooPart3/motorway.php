<?php

require_once 'highway.php';

final class MotorWar extends HighWay
{
    private array $currentVehicles;
    private int $nbLane = 4;
    private int $maxSpeed = 130;

    public function addVehicle(object $vehicle)
    {
        if (!($vehicle instanceof Bicycle || $vehicle instanceof Skateboard )) {
            $currentVehicles[] = $vehicle;
            $this->setCurrentVehicles($currentVehicles);
        } else {
            echo "Bikes or skateboards restricted.";
        }
    }
}