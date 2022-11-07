<?php

require_once './Car.php';
require_once './Camion.php';
require_once './Bike.php';
require_once './LighteableInterface.php';


// $camion3 = new Vehicle('green', 3, 'fuel');

// Instanciation d'un nouvel objet $bike 

$bike = new Bike('blue', 1, 'strong human energy');
// echo $bike->forward();
// echo $bike->brake();

// Instanciation d'un nouvel objet Car 

// $car1 = new Car('yellow', 4, 'diesel');
// echo $car1->forward();
// echo $car1->brake();

$renaultR21 = new Car('grey', 5, 'diesel');
$nevada = new Car('yellow', 5, 'diesel');
// $renaultR21->setHasParkBraker(true);

// try {
//     $renaultR21->start();
// } catch (Exception $e) {
//     echo 'Exeption received : ' . $e->getMessage() . PHP_EOL;
//     $renaultR21->setHasParkBraker(false);
//     var_dump($renaultR21);
// } finally {
//     echo 'Ma voiture roule comme un donut ! ' . PHP_EOL;

// }


var_dump($renaultR21->switchOn());
var_dump($nevada->switchof());






// instanciation de nouveaux camion 

$camion = new Camion('blue', 3, "electric", 5);
// echo $camion->forward();
// echo $camion->brake();
// var_dump($camion);

$camion2 = new Camion("red", 5, "fuel", 10);
// $camion2->setChargement(10);
// echo $camion2->charge();




?>