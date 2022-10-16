<?php

abstract class HighWay
{
    protected array $currentVehicle;
    protected int $nbLane;
    protected int $maxSpeed;

    public function addVehicle($currentVehicle){

        return $this->currentVehicle = getCurrentVehicle();

    }

    /**
     * Get the value of currentVehicle
     */ 
    public function getCurrentVehicle()
    {
        return $this->currentVehicle;
    }

    /**
     * Set the value of currentVehicle
     *
     * @return  self
     */ 
    public function setCurrentVehicle($currentVehicle)
    {
        $this->currentVehicle = $currentVehicle;

        return $this;
    }

    /**
     * Get the value of nbLane
     */ 
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @return  self
     */ 
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */ 
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */ 
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }
}

final class MotorWay extends HighWay
{
    protected int $lanes = 4;
    protected int $mWaySpeed = 130;

}
