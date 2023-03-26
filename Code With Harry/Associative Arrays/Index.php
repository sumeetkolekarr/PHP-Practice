<?php
echo "Associative Arrays in PHP<br>";

// This is called Indexed Arrays
// $arr = array('this', 'that', 'what');
// echo $arr[0];
// echo $arr[1];
// echo $arr[2];

// Associative Arrays
$favCol = array(
    'Bunny' => 'Orange',
    'Cookie' => 'Black',
    'Pari' => 'Light Orange'
);

// echo $favCol['Bunny'] . "<br>";
// echo $favCol['Pari'] . "<br>";

foreach ($favCol as $key => $value){
    echo "<br> Favorite Color of $key is $value";
}

?>