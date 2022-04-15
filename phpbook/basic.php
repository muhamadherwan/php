<?php
// =========================================
// Useful basic PHP 7 reference
// =========================================

// =========================================
// variables
// =========================================

// Variable types
/*
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
*/

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
$number = (int)$strNumber; // Use floatval(), (int), intval()
var_dump($number); // return int 12
echo '<br>';

// Number functions
echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';


// format number
$number = 123456789.1234;
echo number_format($number, 2, '.', ','); // return 123,456,789.12
echo '<br>';

// https://www.php.net/manual/en/ref.math.php

// =========================================
// strings
// =========================================

// Create simple string
$name = 'Herwan';
$string = "Hello, I am $name"; 
$string2 = 'Hello, I am $name'; 
echo $string . '<br>'; // return Hello, I am Herwan
echo $string2 . '<br>'; // return Hello, I am $name

// String concatenation
echo "Hello " . " World"; // Multiple concatenation . " and PHP";

// String functions
$string = "    Hello World      ";

echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // Change into world
echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL;
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;

$invoiceNumber = 100;
$invoiceNumber2 = 123456;
echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_repeat('Hello', 2) . '<br>' . PHP_EOL;

// multiline text and reserve break
$longText = "
This <b>is</b>
a
<b>long</b> text.";
echo nl2br($longText).'<br>';

// multiline text, reserve html tag and brek
echo nl2br(htmlentities($longText)).'<br>';

// https://www.php.net/manual/en/ref.strings.php

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
rsort($fruits);

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Taylor',
    'surname' => 'Otwell',
    'product' => 'Laravel',
    'hobbies' => ['Games', 'Tennis'],
];

echo'<pre>'; print_r($person); echo'</pre>';

// get element by key
echo $person['name'].'<br>';

// set element by key
$person['car'] = 'agera koenigsegg';

// check if empty set a value
if (!isset($person['address'])) {
    $person['address'] = 'unknown';
}

// Null coalescing assignment operator. // Since PHP 7.4
// to do same like above
$person['color'] ??= 'unknown';

// check if array has specific keys
echo'<pre>'; 
print_r(isset($person['car'])); // return true if key exist
echo'</pre>';

// print array keys
echo'<pre>';
print_r(array_keys($person));
echo'</pre>';

// print array values
echo'<pre>';
print_r(array_values($person));
echo'</pre>';

// sort associatiaves arrays by values, by keys
ksort($person); // ksort, krsort, asort, arsort
echo'<pre>';
print_r(array_values($person));
echo'</pre>';

// ============================================
// Associative arrays
// ============================================

$age = 41;

// Ternary if
echo $age < 22 ? 'young' : 'old';
echo '<br>';

// shorter ternary
$myAge = $age ?: 18; // Equivalent of "$age ? $age : 18"

// Null coalescing operator
$var = isset($name) ? $name : 'Daigo';

// same as above but shorter
$var = $name ?? 'Daigo';

// switch
$userRole = 'admin'; // admin, editor, user

switch ($userRole) {
    case 'admin':
        echo 'You can do anything<br>';
        break;
    case 'editor';
        echo 'You can edit content<br>';
        break;
    case 'user':
        echo 'You can view posts and comment<br>';
        break;
    default:
        echo 'Unknown role<br>';
}

// ============================================
// Loops
// ============================================

// while
// while (true) { // Infinite loop: DON'T run this
//     // Do something constantly
// }

// Loop with $counter
$counter = 0; // When counter is 10??
while ($counter < 10) {
    echo $counter.'<br>';
    // if ($counter > 5) break;
    $counter++;
}

// do - while
$counter = 0; // When counter is 10?
do {
    // Do some code right here
    $counter++;
} while ($counter < 10);

// for
for ($i = 0; $i < 10; $i++) {
    echo $i."<br>";
}

// foreach
$fruits = ['durian', 'banana', 'manggo'];
foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}

echo '<br>';

// foreach with index 
$fruits = ['durian', 'banana', 'manggo'];
foreach ($fruits as $i => $fruit) {
    echo $i. ' ' .$fruit . '<br>';
}

echo '<br>';

// Iterate Over associative array.
foreach ($person as $key => $value) {
    if(is_array($value)){
        echo $key.':&nbsp;'.implode( ",", $value ).'<br>'; 
    } else {
        echo $key.':&nbsp;'.$value.'<br>';
    }
}

// ============================================
// Functions
// ============================================

// function to sum all number using ...$nums
function sum(...$nums) {
    $sum = 0;
    foreach ($nums as $num) $sum += $num; // add the numbers
    return $sum;
}
echo sum(1,2,3,4,5);

echo '<br>';

// same like above but using array_reduce and
// arrow function ( fn() => {} )
function sum2(...$nums) {
    return array_reduce($nums, fn($carry, $n) => $carry + $n);
}
echo sum2(1,2,3,4,5);

// ============================================
// Date and Times
// ============================================

// Print current date
echo date('Y-m-d H:i:s') . '<br>';

// Print yesterday
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '<br>';

// Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y, H:i:s') . '<br>';

// Print current timestamp
echo time() . '<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$dateString = '2020-02-06 12:45:35';
$parsedDate = date_parse($dateString); 
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'February 4 2020 12:45:35';

$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';


?>