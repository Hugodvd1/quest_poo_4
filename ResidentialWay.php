<?php
require_once 'Highway.php';

final class ResidentialWay extends Highway
{

    protected int $nbLane = 4;
    protected int $maxSpeed = 50;

    
    public function addVehicle(Vehicle $vehicle)
    {
         $this->setCurrentVehicle($vehicle);
    }
    }


?> 