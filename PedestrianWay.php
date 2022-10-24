<?php
    require_once 'HighWay.php';

    final class PedestrianWay extends Highway
    {
        protected int $nbLane = 1;
        protected int $maxSpeed = 10;
        
        public function addVehicle($vehicle)
        {
            if (($vehicle instanceof Bike) || ($vehicle instanceof Skateboard)){
                $currentVehicles[] = $vehicle;
            }
        }
    }
    

?> 