<?php

class Car {
    // properties
    public $brands;
    private $color;
    public static $tyre = 4;

    public function __construct( $brands ) {
        $this->brands = $brands;
        echo "car class init!".PHP_EOL;
    }

    public function setCarColor( $color ) {
        $this->color = $color;
    }

    public function getCarColor() {
        return $this->color;
    }

    public static function setTyre($qty) {
        self::$tyre = $qty;
    }  
       
}