<?php
// Simple Arrays
$numbers = [1, 44, 55, 25]; // array of numbers
$fruits = array('apple', 'carrot', 'pear'); // array of strings
// echo $numbers; // => Array output
// print_r($numbers); // => Array actually shows
// var_dump($numbers); // => shows the type
// echo $fruits[1]; // => carrot


/* ------ Associative Arrays ----- */

/*
  Associative arrays allow us to use named keys to identify values.
*/

$colors = [
    1 => 'red',
    2 => 'green',
    3 => 'blue',
];

// echo $colors[1];

// Strings as keys
$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',
];

echo $hex['red']; // => #f00
// var_dump($hex);
// print_r($hex)


/* ---- Multi-dimensional arrays ---- */

/*
  Multi-dimansional arrays are often used to store data in a table format.
*/

// Single person
$person1 = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com',
];

// Array of people
/*
$people = [
    $person1, //   [...$person1]
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@gmail.com',
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@gmail.com',
    ],
];
*/
?>

