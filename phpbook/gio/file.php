<?php

// working with file

// create dir
// mkdir('bar');

rmdir('bar');
// list all file in dir
$dir = scandir(__DIR__);

var_dump( $dir);