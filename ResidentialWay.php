<?php
require_once 'Highway.php';

final class ResidentialWay extends Highway
{

    protected int $nbLane = 4;
    protected int $maxSpeed = 50;

    
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            return 'This type of vehicle is not authorized on this type of highway';
        } else {
            $this->setCurrentVehicle($vehicle);
        }
    }
}

?> 