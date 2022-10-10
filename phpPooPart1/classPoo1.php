<?php

class Bicycle
{
    private string $color;
    private int $currentSpeed;
    private int $nbSeats = 1;
    private int $nbWheels = 2;
    private bool $hasLuggageRack = false;

    public function __construct(string $color, int $currentSpeed, int $nbSeats, int $nbWheels, bool $hasLuggageRack)
    {
        $this->color=$color;
        $this->currentSpeed=$currentSpeed;
        $this->nbSeats=$nbSeats;
        $this->nbWheels=$nbWheels;
        $this->hasLuggageRack=$hasLuggageRack;
    }

    public function forward($speed): string{
        $this->currentSpeed = $speed;
        return "Go !";
    }
    
    public function brake(): string{
       $sentence = "";
       while ($this->currentSpeed > 0) {
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
       }
       $sentence .= "I'm stopped !";
       return $sentence;
    }

    public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

public function setCurrentSpeed(int $currentSpeed): void
{
    $this->currentSpeed = $currentSpeed;
}
}

class Cars
{
    private int $nbCarWheels;
    private int $currentCarSpeed;
    private string $carColour;
    private int $nbCarSeats;
    private string $carEnergy;
    private int $carEnergyLevel;

    public function __construct(string $carColour, int $nbCarSeats, string $carEnergy)
    {
        $this->carColour=$carColour;
        $this->nbCarSeats=$nbCarSeats;
        $this->carEnergy=$carEnergy;
    }

    public function carForward($speed): string{
        $this->currentCarSpeed = $speed;
        return "Go !";
    }
    
    public function carBrake(): string{
       $sentence = "";
       while ($this->currentCarSpeed > 0) {
           $this->currentCarSpeed--;
           $sentence .= "Brake !!!";
       }
       $sentence .= "I'm stopped !";
       return $sentence;
    }

    public function getCurrentCarSpeed(): int
    {
    return $this->currentCarSpeed;
    }

    public function setCurrentSpeed(int $currentCarSpeed): void
    {
        if($currentCarSpeed >= 0) {
            $this->currentCarSpeed = $currentCarSpeed;
        }
    }

    /**
     * Get the value of nbWheels
     */ 
    public function getNbWheels()
    {
        return $this->nbCarWheels;
    }

    /**
     * Get the value of currentSpeed
     */ 
    public function getCurrentSpeed()
    {
        return $this->currentCarSpeed;
    }

    /**
     * Get the value of colour
     */ 
    public function getColour()
    {
        return $this->carColour;
    }

    /**
     * Get the value of nbSeats
     */ 
    public function getNbSeats()
    {
        return $this->nbCarSeats;
    }

    /**
     * Get the value of energy
     */ 
    public function getEnergy()
    {
        return $this->carEnergy;
    }

    /**
     * Get the value of energyLevel
     */ 
    public function getEnergyLevel()
    {
        return $this->carEnergyLevel;
    }
}
