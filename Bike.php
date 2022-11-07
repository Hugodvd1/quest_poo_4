
<?php

require_once 'Vehicle.php';
require_once 'LighteableInterface.php';

class Bike extends Vehicle
{

    public function switchOff(): bool 
    {
        return false;
    }

public function switchOn() {
    if ($this->getCurrentSpeed() > 10) {
        return true;
    }
    return false;
}

}