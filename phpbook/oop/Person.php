<?php

// person class
class Person {
    // props
    public string $name;
    public string $surname;
    // also can set value as null
    protected ?int $age;
    public static int $counter = 0;

    // constructor
    public function __construct($name, $surname) {
        $this->$name = $name;
        $this->$surname = $surname;
        $this->age = null;
        // excess static props
        self::$counter++;
    }

    // setter methods for private props
    public function setAge($age) {
        $this->age = $age;
    }

    // getter methods for return the private props
    public function getAge() {
        return $this->age;
    }

    // static methods
    public static function getCounter() {
        return self::$counter;
    }
}