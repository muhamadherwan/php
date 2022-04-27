<?php

/**
 * Using scope resolution on inheritances. 
 * Use parent:: in child
 * Use self:: in self class
 **/

// parent class
class FirstClass {
    // parent class constant
    const EXAMPLE = "Parent constant";

    public static function test() {
        echo self::EXAMPLE.PHP_EOL;
    }
}

// child class
class SecondClass extends FirstClass {
    public static $var = "child static props";

    public static function test2() {
        // display parent class constant value using parent::
        echo "parent static constant = " . parent::EXAMPLE . PHP_EOL;

        // display own static properties using self::
        echo "self static properties = " . self::$var . PHP_EOL;
    }
}


echo FirstClass::test();

echo SecondClass::test2();