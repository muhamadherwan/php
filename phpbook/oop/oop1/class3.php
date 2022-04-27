<?php

class Person {
    
    // properties
    public $name;
    private $eyeColor;
    private $age;

    // constructors
    public function __construct( $name, $eyeColor, $age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
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
}


$laravel = new Person('taylor otwell', 'blue', 41);
echo $laravel->setName('TO').PHP_EOL;

$laravel->setEyeColor('red');
echo $laravel->getEyeColor().PHP_EOL;
// var_dump($laravel);


// $ror = new Person('DHH', 'pink', 44);
// echo $ror->setName('David').PHP_EOL;

// echo $laravel->name.PHP_EOL;
// var_dump($ror);