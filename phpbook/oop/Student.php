<?php

require_once "Person.php";

// inheritance to Person class (parent)
class Student extends Person {

    public string $studentId;

    // construcor
    public function __construct($name, $surname, $studentId) {
        
        // parent class constructor (Person class)
        parent::__construct($name, $surname);
        
        $this->studentId = $studentId;
        $this->age = 18;


    }
}