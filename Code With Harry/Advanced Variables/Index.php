<?php
echo "Variables in PHP<br>";
$a = 98; // Global Variable
$b = 9;

function printVal(){
    // $a = 97; //Local Variable 
    global $a, $b; //Accesses the Global Variable
    $a = 100;
    $b = 1000;
    echo "<br>The value of your variable a is $a and b is $b";
}

// echo $a . "<br>";
printVal();
echo "<br>The value of your variable is $a and b is $b" . "<br>";
// echo var_dump($GLOBALS); //Returns all the variables
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);


?>