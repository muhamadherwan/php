<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
    $path = "classes/";
    $extension = ".class.php";
    $fullPath = $path . str_replace('\\','/',$className) . $extension;
    //  $fullPath = $path . $className . $extension;

    if (!file_exists($fullPath)) {
        echo "the $fullPath file not exist.".PHP_EOL;
        exit;
    } 
    
    include_once $fullPath;
    
}