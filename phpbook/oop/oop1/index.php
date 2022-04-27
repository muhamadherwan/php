<?php
// using strict type
declare(strict_types = 1);

include 'include/autoloader.inc.php';

// $laravel = new Person\Person('taylor otwell', 'blue', 41);
// // /echo $laravel->setName('TO').PHP_EOL;

// // acces static properties using the class name and "::" syntax. exp:
// echo Person\Person::$drivingAge.PHP_EOL;

// // set the static properties using static methods
// Person\Person::setDrivingAge(15);

// echo Person\Person::$drivingAge.PHP_EOL;

// // set the static property using non static method
// $laravel->setDrivingAge2(21);
// echo Person\Person::$drivingAge.PHP_EOL;

$car1 = new Car("koniseg aguera");
echo $car1->brands.PHP_EOL;


try {
    $car1->setCarColor("red");
    echo $car1->getCarColor().PHP_EOL;    
} catch (TypeError $e) {
    echo "Error!: " . $e->getMessage();
}

 

// echo Car::$tyre.PHP_EOL;
// Car::setTyre(3);
// echo Car::$tyre.PHP_EOL;