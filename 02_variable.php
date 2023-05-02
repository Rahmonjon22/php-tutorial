<?php
/** PHP DATA TYPES */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/
/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/
$name = 'Brad'; // string
$age = 40; // int
$has_kids = false; // boolean
$cash_on_hand = 20.75; // float

// echo $age;
// echo $name;
// echo $has_kids;
// var_dump($has_kids);
// var_dump($cash_on_hand);

/* --- Adding variables to strings -- */

// Double quotes can be used to add variables to strings
// echo "$name is $age years old";

// Better to do this
// echo "${name} is ${age} years old";

// Concatenate Strings

// echo '<h3>' . $name . ' is ' . $age . ' years old</h3>';

// Arithmetic Operators

// echo 5 + 5;
// echo 10 - 6;
// echo 5 * 10;
// echo 10 / 2;
// Constants - Cannot be changed
// define('HOST', 'localhost');
// define('USER', 'root');

// var_dump(HOST);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1><?php echo 'Post one' ?></h1>

</body>
</html>
