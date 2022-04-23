<?php
/** NOTES FROM LEARNING PHP THE RIGHT WAY */
?>

<?php // echo in html embeded shorthand ?>
<?= 'hello world <br>'?>


<?php

// assign variable by refferances.
// if the value of variable x change, the value in variable y will change also.
$x = 'otwel';
$y = &$x;

$x = 'taylor';
echo $y .'<br>';

// variable variables
// take the new values and treat it as the name of the variables.

$first = 'second'; // set the variable variables

$$first = 'values'; // set the variable variables values

echo $first .'<br>';
echo $second .'<br>';            
echo "$first, ${$first}";

// Data types
# 4 Scalar types:
    # bool - true / false
    # int - 1, -5 ( no decimal)
    # float - 1.3, -0.2
    # string "hello world"

// check variable type
echo '<br>';
$greeting = 'hi hi';
echo gettype($greeting);
echo '<br>';

# 4 Compound types:
    # array
    $fruits = ['apple', 'banana', 'manggo'];
    print_r($fruits);

    # object
    # callable
    # iterable

# 2 special types
    # resource
    # null


// using strict type
// declare(strict_types = 1);

// type hinting: set the variable type. exp:
function sum(int $x, int $y) {
    return $x + $y;
}

