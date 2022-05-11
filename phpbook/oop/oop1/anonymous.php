<?php

/*
|--------------------------------------------------------------------------
| anonymous class
|--------------------------------------------------------------------------
|
| Class that have no name, create by object and
| will be destroy after use.
|
*/

// create the anonymous class
$newObj = new class() 
{
    public function helloWorld() 
    {
        echo "Hello World!" . PHP_EOL;
    }
};

// use the anonymus class
$newObj->helloWorld();
