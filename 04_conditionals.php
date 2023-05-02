<?php
/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/*
$age = 20;

 if ($age >= 17){
echo 'You are old enough to vote';
}else {echo 'Sorry you are not yet able to vote';
};
 * */
/*
$t = date("H");
if($t < 12){
echo 'Good Morning';
}elseif ($t < 17){
echo 'Good afternoon';
} else {
echo 'Good evening';
};
*/

// Check if an array is empty
// The isset() function will generate a warning or e-notice when the variable does not exists. The empty() function will not generate any warning or e-notice when the variable does not exists.

 $posts = ['First Post'];
// $posts = [];
/*
if(!empty($posts)){
echo $posts[0];
}else {
echo 'No Posts';}  */

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/
// $first_post = !empty($posts) ? $posts[0] : 'No Posts for today';
// $first_post = !empty($posts) ? $posts[0] : null;
$first_post =  $posts[0] ?? null;

// echo $first_post;

$favcolor = 'brown';

switch ($favcolor){
    case 'red':
    echo 'your favourite color is red';
    break;
    case 'blue':
        echo 'your favourite color is blue';
        break;
    case 'green':
        echo 'your favourite color is green';
        break;
    case 'grey':
        echo 'your favourite color is grey';
        break;
    default:
    echo 'Your favourite color is not red blue green or grey';
};