<?php

class Person {
    
    // properties
    public $name;

    // methods 
    public function setName($name):string {
        $this->name = $name;
        return $this->name;
    }
}


$laravel = new Person;
echo $laravel->setName('taylor otwell').PHP_EOL;

$ror = new Person;
echo $ror->setName('DHH').PHP_EOL;