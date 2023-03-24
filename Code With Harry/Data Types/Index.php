<?php
$name = "Bunny";
$income = 200;

/* PHP Data Types
1. String
2. Integer
3. Float
4. Boolean
5. Object 
6. Array
7. NULL
*/

// String - Sequence of characters
$enemy = "Black Cat";
echo "$name's Dushmann is $enemy <br>";

// Integer - Non Decimal number
$debt = -655;
echo $debt;
echo "<br>";
echo $income;
echo "<br>";

// Float - Decimal number
$decimal = 45.6;
echo $decimal;
echo "<br>";

// Boolean - Can be either True or False
$x = true;
$y = false;
echo $x;  // Returns 1
echo "<br>";
echo $y;  // Returns Blank Space
echo "<br>";
echo var_dump($x);
echo "<br>";
echo var_dump($y);
echo "<br>";

// Object - Instances of classes
// Employee is a class --> Bunny can be one Object 

// Array - Used to store multiple values in a single variable
$friends = array("rohan", "shubham", "skii", "Larry");
echo $friends[0];
echo "<br>";
echo var_dump($friends);
echo "<br>";

// Null 
$n = null;
echo $n;
echo "<br>";
echo var_dump($n);
?>