<?php

require_once 'highway.php';


final class PedestrianWay extends HighWay
{
    private array $currentVehicles;
    private int $nbLane = 1;
    private int $maxSpeed = 10;

    public function addVehicle(object $vehicle)
    {
        if (($vehicle instanceof Bicycle || $vehicle instanceof Skateboard )) {
            $currentVehicles[] = $vehicle;
            $this->setCurrentVehicles($currentVehicles);
        } else {
            echo "Bikes or skatboards restricted.";
        }
    }
}