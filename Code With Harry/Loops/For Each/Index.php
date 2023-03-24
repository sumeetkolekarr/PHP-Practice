<?php
echo "For-Each Loops in PHP<br>";

$arr = array("Banana", "Apple", "Mango", "StarFruit");

// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i];
//     echo "<br>";
// }

// Better Way to do the same thing
foreach ($arr as $value) {
    echo "$value <br>";
}


?>