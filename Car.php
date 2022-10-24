<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{

    private string $energy;

    private int $energyLevel;
    private bool $hasParkBraker;

    // Construct 


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }


    // Méthodes 
    
    public function start(): string
    {
        if ($this->hasParkBrake === true) {
            throw new Exception('impossible de partir lors l\'activation du frein a main ' . PHP_EOL);
        } else {
            return 'Lets go !' . PHP_EOL;
        }
    }


    // Getter & Setter 

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * Get the value of hasParkBraker
     */ 
    public function getHasParkBraker()
    {
        return $this->hasParkBraker;
    }

    /**
     * Set the value of hasParkBraker
     *
     * @return  self
     */ 
    public function setHasParkBraker($hasParkBraker)
    {
        $this->hasParkBraker = $hasParkBraker;

        return $this;
    }
}




?>