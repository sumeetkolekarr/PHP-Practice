<?php
// Operators in PHP 
/*
1. Arithmetic Operators
2. Assignment Operator
3. Comparison Operator
4. Logical Operators
*/

$a = 45;
$b = 6;


// 1. Arithmetic Operator
echo "For a + b, the result is " . $a + $b . "<br>";
echo "For a - b, the result is " . $a - $b . "<br>";
echo "For a * b, the result is " . $a * $b . "<br>";
echo "For a / b, the result is " . $a / $b . "<br>";
echo "For a % b, the result is " . $a % $b . "<br>";
echo "For a ** b, the result is " . $a ** $b . "<br>";
echo "<br>";

// 2. Assignment Operator
// $x = $a;
// echo "For x, the value is " . ($x) . "<br>";
// $a += 6;
// echo "For a, the new value is " . ($a) . "<br>";
// $a -= 6;
// echo "For a, the new value is " . ($a) . "<br>";
// $a *= 6;
// echo "For a, the new value is " . ($a) . "<br>";
// $a /= 6;
// echo "For a, the new value is " . ($a) . "<br>";
// $a %= 6;
// echo "For a, the new value is " . ($a) . "<br>";
// $a **= 6;
// echo "For a, the new value is " . ($a) . "<br>";

// 3. Comparison Operator
// $x = 7;
// $y = 0;

// echo "For x == y, the result is ";
// echo var_dump($x == $y);
// echo "<br>";

// echo "For x > y, the result is ";
// echo var_dump($x > $y);
// echo "<br>";

// echo "For x < y, the result is ";
// echo var_dump($x < $y);
// echo "<br>";

// echo "For x >= y, the result is ";
// echo var_dump($x >= $y);
// echo "<br>";

// echo "For x <= y, the result is ";
// echo var_dump($x <= $y);
// echo "<br>";

// echo "For x <> y, the result is ";
// echo var_dump($x <> $y);  // Not equals to operator
// echo "<br>";

// 4. Logical Operator

$m = true;
$n = false;

echo "For m and n, the result is ";
echo var_dump($m and $n);
echo "<br>";

echo "For m && n, the result is ";
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is ";
echo var_dump($m or $n);
echo "<br>";

echo "For m || n, the result is ";
echo var_dump($m || $n);
echo "<br>";

echo "For !m, the result is ";
echo var_dump(!$m
);
echo "<br>";







?>