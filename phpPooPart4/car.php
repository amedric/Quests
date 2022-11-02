<?php

class Car
{
    private bool $hasParkBrake;

    public function __construct(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start()
    {

        try {

            echo division(5) . PHP_EOL;
        
            echo division(0) . PHP_EOL;
        
        } catch(Exception $e){
        
            // code to manage exceptions
        
            echo 'Exception received  : ' . $e->getMessage() . PHP_EOL;
        
        } finally {
        
            echo "End !" . PHP_EOL;
        
        }
    }

    /**
     * Get the value of hasParkBrake
     */ 
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @return  self
     */ 
    public function setParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }
}
