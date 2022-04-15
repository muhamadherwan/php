<?php
// Useful basic reference


// =========================================
// variables
// =========================================

// get type of variable
$str = "this is a variable";
echo gettype($str).'<br>';

$arr = ['1',2,'3'];
echo gettype($arr).'<br>';

// print the whole variable
var_dump($str);
echo '<br>';
var_dump($arr);
echo '<br>';

// checking variable by its type
is_string($str); // return true
is_int($str); // return false
is_bool();
is_double();

// check variable is defined or not
isset($str); // true

// constants
define('Number', 3.15);
echo Number.'<br>';

// build in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';

// =========================================
// numbers
// =========================================

// assigment operator
$a = 1; $b = 4;
$a += $b; // is same as $a = $a + $b

// increment / decrement operator
echo $a++; // return value then increment = 1
echo ++$a; // increment value then return value = 3
echo $a--;
echo --$a;

// number checking function
is_float(3.5); // true
is_double(3.5); // true
is_int(7); // true
is_numeric("3.4"); // true
is_numeric("3g.t"); // false 

// number conversion
$strNumber = '12.23';
$number = (int)$strNumber;
var_dump($number); // return int 12
echo '<br>';

// format number
$number = 123456789.1234;
echo number_format($number, 2, '.', ','); // return 123,456,789.12
echo '<br>';

// =========================================
// strings
// =========================================

// multiline text and reserve break
$longText = "
This <b>is</b>
a
<b>long</b> text.";
echo nl2br($longText).'<br>';

// multiline text, reserve html tag and brek
echo nl2br(htmlentities($longText)).'<br>';

// =========================================
// arrays
// =========================================

// print formated array
$fruits = ['apple', 'banana', 'grape'];
echo '<pre>';var_dump($fruits);echo '</pre>';

// get element by index
echo $fruits[1].'<br>';

// set new element by index
$fruits[0] = 'durian';

// check if array has element at index
isset($fruits[3]); // return false

// append element at the end of array
$fruits[] = 'manggo';

// print the length of the array
echo count($fruits).'<br>';

// add element at end of array
array_push($fruits, 'dates');

// remove element at the end of array
array_pop($fruits);

// add element at the front of the array
array_unshift($fruits, 'kurma');

// remove element at the front of array
array_shift($fruits);

// convert string to array
$car = "honda, toyota, nissan";
$carArr = explode(",", $car);
echo '<pre>';var_dump($carArr);echo '</pre>';

// convert array to string
$carStr = implode(" &", $carArr);
echo var_dump($carStr).'<br>';

// check element in array
in_array('honda', $carArr); // return true

// search element index
array_search('toyota', $carArr); // return int(1)

// merge two array
$newArr = array_merge($fruits, $carArr);

echo '<pre>';var_dump($newArr);echo '</pre>';

// merge two array using spread
$newArr2 = [...$carArr, ...$fruits];
echo '<pre>';var_dump($newArr2);echo '</pre>';

// sorting array
sort($fruits);

// reverse sort array
rsort($fruits)


?>