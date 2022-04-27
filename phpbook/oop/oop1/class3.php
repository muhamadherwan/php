<?php

class Person {
    
    // properties
    public $name;
    private $eyeColor;
    private $age;
    // static properties
    public static $drivingAge = 17;

    // constructors
    public function __construct( $name, $eyeColor, $age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
        echo "this class has been instantiated".PHP_EOL;
    }

    // methods 
    public function setName($name):string {
        $this->name = $name;
        return $this->name;
    }

    // eye color setter methods
    public function setEyeColor($color) {
        $this->eyeColor = $color;
    }

    // eye color getter methods
    public function getEyeColor() {
        return $this->eyeColor;
    }

    // setter method using static method
    public function setDrivingAge($dA) {
        // use "self::" to refferance properties in the class
        self::$drivingAge = $dA;
    }

    // setter method to static property using non static method
    public function setDrivingAge2($dA){
        self::$drivingAge = $dA;
    }

    // destructors
    public function __destruct() {
        echo "this is the end of the class".PHP_EOL;
    }
}


$laravel = new Person('taylor otwell', 'blue', 41);
// /echo $laravel->setName('TO').PHP_EOL;

// acces static properties using the class name and "::" syntax. exp:
echo Person::$drivingAge.PHP_EOL;

// set the static properties using static methods
Person::setDrivingAge(15);

echo Person::$drivingAge.PHP_EOL;

// set the static property using non static method
$laravel->setDrivingAge2(21);
echo Person::$drivingAge.PHP_EOL;




