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
$coding = ['PHP', 'Python', 'Java'];

echo $coding['1'];

// set new value to array s
$coding[1] = 'C++';

echo "<br>";

print_r($coding);

echo "<br>";
// count item in array
echo count($coding);

// push new element into array
$coding[] = 'ruby';
// push multiple element
array_push($coding, 'laravel', 'rails');


echo '<pre>'; var_dump($coding); echo '</pre>';

// ASSOCIATEVE ARRAYS ( Array with key and values)
$coding2 = [
    'php' => '8.0',
    'phytion' => '3.9'
];

// add element to assoc array
$coding2['go'] = '1.5';

// using var
$new = 'javascript';
$coding2[$new] = 'ES6';


// echo '<pre>'; var_dump($coding2); echo '</pre>';

// MULTIDIMENSIONAL ARRAYS
$coding3 = [
    'php' => [
        'creator' => 'rasmus',
        'extension' => '.php',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 8, 'date' => '2020'],
            ['version' => 7, 'date' => '2019'], 
        ],
    ],
    'phyton' => [
        'creator' => 'guido',
        'extension' => '.py',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 3.9, 'date' => '2020'],
            ['version' => 3.8, 'date' => '2019'], 
        ],
    ],
];

// echo '<pre>'; var_dump($coding3); echo '</pre>';

// echo $coding3['php']['versions'][0]['date'];
// echo $coding3['php']['extension'];

// removing array value at the end
// array_pop($coding);

// echo '<pre>'; var_dump($coding); echo '</pre>';

// removing array value at the front
array_shift($coding);

// echo '<pre>'; var_dump($coding); echo '</pre>';

// set key in array
$array = ['a', 'b', 50 => 'c', 'd' ];

echo '<pre>'; var_dump($array); echo '</pre>';

// remove key from array
unset($array[50]);
echo '<pre>'; var_dump($array); echo '</pre>';

// unset($array);
// echo '<pre>'; var_dump($array); echo '</pre>';

// casting to array
$x = 5;
var_dump(array($x));


$arr = ['a' => 1, 'b' => null];

// check array key is exist
var_dump(array_key_exists('a', $arr));

echo '<br>';
// check array key is exist and the value is not null
var_dump(isset($array['a']));