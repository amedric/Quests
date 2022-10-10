<?php

require_once 'Vehicle.php';


class Trucks extends Vehicle
{

    private int $storageCapacity;
    private int $load;

    public function __construct(string $color, int $nbSeats, string $storageCapacity, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setStorageCapacity($storageCapacity);
    }

    public function load($load):string {
        $this->load=$load;
        return 'Load of truck: '.$load.'<br>';
    }
    public function fillLoad():string{
        $sentence = "";
        while ($this->load < $this->getStorageCapacity()) {
            $this->load++;
            $sentence .= "filling up..";
        }
        $sentence .= "Load full! <br>";
        return $sentence;
    }

    public function drive($speed): string{
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

    /**
     * Get the value of storageCapacity
     */ 
    public function getStorageCapacity()
    {
        return $this->storageCapacity;
    }

    /**
     * Set the value of storageCapacity
     *
     */ 
    public function setStorageCapacity($storageCapacity)
    {
        $this->storageCapacity = $storageCapacity;

        return $this;
    }

    /**
     * Get the value of loading
     */ 
    public function getLoad()
    {
        return $this->load;
    }

    /**
     * Set the value of loading
     *
     */ 
    public function setLoad($load)
    {
        $this->load = $load;

        return $this;
    }
}

?>
