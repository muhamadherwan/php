<?php

require_once "Person.php";
require_once "Student.php";

$student = new Student("Taylor", "Otwell", "1234");


// // new object instance
// $p = new Person('taylor', 'otwell');
// $p->setAge(41);
// echo $p->getAge();


// $p2 = new Person('daigo', 'saito');
// $p2->setAge(40);
// echo $p2->getAge();

// $p2 = new Person('david', 'heinemmer');

// echo '<pre>'; var_dump($p2); echo '</pre>';

// // print person class static getCounter methods
// echo Person::getCounter();

echo '<pre>'; var_dump($student); echo '</pre>';