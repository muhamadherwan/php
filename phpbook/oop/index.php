<?php
// person class
class Person {
    // props
    public $name;
    public $surname;
    private $age;
    public static $counter = 0;

    // constructor
    public function __construct($name, $surname) {
        $this->$name = $name;
        $this->$surname = $surname;
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

// new object instance
$p = new Person('taylor', 'otwell');
$p->setAge(41);
echo $p->getAge();


$p2 = new Person('daigo', 'saito');
$p2->setAge(40);
echo $p2->getAge();

$p2 = new Person('david', 'heinemmer');

echo '<pre>'; var_dump($p2); echo '</pre>';

// print person class static getCounter methods
echo Person::getCounter();