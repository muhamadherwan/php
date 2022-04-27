<?php 

class Person {
    protected $first = "Taylor";
    private $last = 'Otwell';

    public function name() {
        $a = $this->first;
        return $a.PHP_EOL;
    }
}

// inheritance exp:
class Pet extends Person {
    public function owner() {
        $a = $this->first;
        return $a.PHP_EOL;
    }
}

// $pet1 = new Pet();
// echo $pet1->owner();

$person1 = new Person();
echo $person1->name();