<?php

// magic cosnstants
echo __FILE__ .'<br>'; // get current file
echo __DIR__ .'<br>'; // get current directory

// create new dir
// mkdir('test');

// // rename dir
// rename('test', 'test2'); 

// // delete dir
// rmdir('test2');

// read file and folder inside directory
$files = scandir('./');
echo '<pre>'; var_dump($files); echo '</pre>';

// file get contents
// file_put_contents('lorem.txt', "First line");
// $lorem = file_get_contents('lorem.txt');
// file_put_contents('lorem.txt', "second line" . PHP_EOL . $lorem);
// echo $lorem;

// file_get_contents from URL
$jsonContent = file_get_contents('https://jsonplaceholder.typicode.com/users');
$users = json_decode($jsonContent); // change to assoc arrays
echo '<pre>';
var_dump($users);
echo '</pre>';

// check file exist or not
file_exists('lorem.txt'); // return true if exist

// get files size
// echo filesize('lorem.txt');

// delete file
unlink('lorem.txt');

// ref:
// https://www.php.net/manual/en/book.filesystem.php