<?php
/** NOTES FROM LEARNING PHP THE RIGHT WAY */
?>

<?php // echo in html embeded shorthand ?>
<!-- <?= 'hello world <br>'?> -->


<?php

// assign variable by refferances.
// if the value of variable x change, the value in variable y will change also.
// $x = 'otwel';
// $y = &$x;

// $x = 'taylor';
// echo $y .'<br>';

// // variable variables
// // take the new values and treat it as the name of the variables.

// $first = 'second'; // set the variable variables

// $$first = 'values'; // set the variable variables values

// echo $first .'<br>';
// echo $second .'<br>';            
// echo "$first, ${$first}";

// // Data types
// # 4 Scalar types:
//     # bool - true / false
//     # int - 1, -5 ( no decimal)
//     # float - 1.3, -0.2
//     # string "hello world"

// // check variable type
// echo '<br>';
// $greeting = 'hi hi';
// echo gettype($greeting);
// echo '<br>';

// # 4 Compound types:
//     # array
//     $fruits = ['apple', 'banana', 'manggo'];
//     print_r($fruits);

//     # object
//     # callable
//     # iterable

// # 2 special types
//     # resource
//     # null


// // using strict type
// // declare(strict_types = 1);

// // type hinting: set the variable type. exp:
// function sum(int $x, int $y) {
//     return $x + $y;
// }


// // string Heredoc
// $name = "taylor otwell";
// $str = <<< STR
// <div>
// <p>Hello $name.</p><p>Laravel creator</p>
// </div>
// STR;

// echo nl2br($str);

// // now doc. cannot outpout variable values.
// $text = <<< 'TEXT'
// line1
// line2
// line3
// TEXT;

// echo nl2br($text);

// ARRAYS
// $coding = ['PHP', 'Python', 'Java'];

// echo $coding['1'];

// // set new value to array s
// $coding[1] = 'C++';

// echo "<br>";

// print_r($coding);

// echo "<br>";
// // count item in array
// echo count($coding);

// // push new element into array
// $coding[] = 'ruby';
// // push multiple element
// array_push($coding, 'laravel', 'rails');


// echo '<pre>'; var_dump($coding); echo '</pre>';

// // ASSOCIATEVE ARRAYS ( Array with key and values)
// $coding2 = [
//     'php' => '8.0',
//     'phytion' => '3.9'
// ];

// // add element to assoc array
// $coding2['go'] = '1.5';

// // using var
// $new = 'javascript';
// $coding2[$new] = 'ES6';


// // echo '<pre>'; var_dump($coding2); echo '</pre>';

// // MULTIDIMENSIONAL ARRAYS
// $coding3 = [
//     'php' => [
//         'creator' => 'rasmus',
//         'extension' => '.php',
//         'isOpenSource' => true,
//         'versions' => [
//             ['version' => 8, 'date' => '2020'],
//             ['version' => 7, 'date' => '2019'], 
//         ],
//     ],
//     'phyton' => [
//         'creator' => 'guido',
//         'extension' => '.py',
//         'isOpenSource' => true,
//         'versions' => [
//             ['version' => 3.9, 'date' => '2020'],
//             ['version' => 3.8, 'date' => '2019'], 
//         ],
//     ],
// ];

// // echo '<pre>'; var_dump($coding3); echo '</pre>';

// // echo $coding3['php']['versions'][0]['date'];
// // echo $coding3['php']['extension'];

// // removing array value at the end
// // array_pop($coding);

// // echo '<pre>'; var_dump($coding); echo '</pre>';

// // removing array value at the front
// array_shift($coding);

// // echo '<pre>'; var_dump($coding); echo '</pre>';

// // set key in array
// $array = ['a', 'b', 50 => 'c', 'd' ];

// echo '<pre>'; var_dump($array); echo '</pre>';

// // remove key from array
// unset($array[50]);
// echo '<pre>'; var_dump($array); echo '</pre>';

// // unset($array);
// // echo '<pre>'; var_dump($array); echo '</pre>';

// // casting to array
// $x = 5;
// var_dump(array($x));


// $arr = ['a' => 1, 'b' => null];

// // check array key is exist
// var_dump(array_key_exists('a', $arr));

// echo '<br>';
// // check array key is exist and the value is not null
// var_dump(isset($array['a']));

// echo '<br>';

// // foreach
// $user = [
//     'name' => 'taylor',
//     'framework' => 'laravel',
//     'product' => ['forge', 'spark', 'envourge'],
// ];

// foreach ($user as $key => $value) {
//     if (is_array($value)) {
//         echo $key . ':' . implode(',', $value);
//     } else {
//         echo $key . ':' . $value . '<br>';
//     }   
// }

// // destroy the $value variable after use in foreach
// unset($value);


// echo '<br><br>';

// // loops without curly bracket syntax
// foreach ($user as $key => $value) :
//     if (is_array($value)) {
//         echo $key . ':' . implode(',', $value);
//     } else {
//         echo $key . ':' . $value . '<br>';
//     }   
// endforeach;


// // match. only in php 8. alternative to switch. strict cases.
// // $status = 1;

// // $statusDisplay = match($status) {
// //     1 => 'Paid',
// //     2, 3 => 'Declined,',
// //     0 => 'Pending',
// //     default => 'Unknown',
// // };

// // echo $statusDisplay;


// // advance fuction using strict type

// // enforce code to use strict type:
// declare(strict_type=1);
// // set the return value type
// // exp: set the return value to be integer or null
// function foo(): ?int {
//     return 1;
// }

// // set return multiply type (php8 only).
// // exp set to null,int and float only
// function fooa(): int|float {
//     return 1;
// }

// // set return all multiply type (php8 only).
// function foob(): mixed {
//     return 1;
// }

// // set type hinting on function parameters
// // exp set parameter x and y to accept only int and float
// // set default value for y perimeter
// // set the return value only in int or float type
// function fooc(int|float $x, int|float $y = 10): int|float {
//     return $x + $y;
// } 

// /* using the splat operator ... (php 8)
// * use as parameter so can pass many argument in arrays
// * set the first, second param and third parameter as int or float so 
// * in this exp we use array_sum to sum up all the argument values
// * set the return value to be in int or float
// */
// function sum(int|float $x, int|float $y, int|float ...$numbers): int|float {
//     return $x + $y + array_sum($numbers);
// }

// $a = 6.0;
// $b = 7;
// echo sum($a, $b, 50, 100, 25) . '<br>';

// // unpack array with the splat operator. exp:
// $a = 6.0;
// $b = 7;
// $numbers = ['50', '100', '25']
// echo sum($a, $b, ...$numbers) . '<br>';


// // php 8 name argument. exp:
// echo sum(a: $a, b: $b);

// // global variable
// $GLOBALS['var_name'];
// // static variable
// static $value = 'some values';

/* variable function
* set function to variable and then call it using the variable.
*/
function sum(int|float ...$numbers): int|float {
    return array_sum($numbers);
}

$x = 'sum';

// use is_callable() to check if the function exist
if (is_callable($)){
    echo $x(1, 2, 3, 4);
} else {
    echo "not callable";
}


/* anonymous function.
* function not has name and an experession assign to variable  
* and then call it using the variabal.
* use the 'use' syntax to access parent variable
*/ 

$x = 7;
$sum2 = function (int|float ...$numbers) use ($x): int|float {
    echo $x;
    return array_sum($numbers);
};

echo sum2(1,2,3,4);


// callback: function in function
$array = [1,2,4,5];

$array2 = array_map(function($element) {
    return $element * 2;}, $array);

// call back using anonymous function and 'callable' syntax
$sum3 = function(callable $callback, int|float ...$numbers ): int|float {
    return $callback(array_sum($numbers));
}

echo $sum3(function($element){
    return $element * 2;
},1,2,3,4);

// arrow function
// arrow function only can be use in single line.
$array = [1,2,4,5];

$array2 = array_map(fn($number) => $number * $number, $array);
print_r($array);

/* common useful array functions:
* array_chunks = split and array into chunks

* array_combine = combine 2 or more array to create a new array

* array_filters = iterate over each array values, and acces the value of given * callback. If the return from the callback is true, the element is return to 
* the the result array, else the element will be discard.

* array_keys = get the key in an array

* array_map = apply callback to each element of the arrays

* array_merge = merge arrays to form new array

* array_reduce

* array_search = search element in array

* in_array = search element in array

* ksort = sort array by keys
* asort = sort array by values
* usort = sort array by custom functions

/* Check and set php.ini config */
// check default value example
// var_dump(ini_get('error_reporting'));
// set new value example
// ini_set('error_reporting', E_ALL & ~E_WARNING);





