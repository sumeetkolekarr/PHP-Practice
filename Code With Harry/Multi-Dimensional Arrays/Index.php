<?php
echo "Multi-Dimensional Arrays in PHP<br>";

$multiDim = array(
    array(2,5,7,8),
    array(1,2,3,1),
    array(4,5,0,1)
);

echo var_dump($multiDim). "<br>";
echo $multiDim[0][0] . "<br>";

// Printing the values of a 2 Dimensional Array
// for ($i=0; $i < count($multiDim); $i++) { 
//     echo var_dump($multiDim[$i]);
//     echo "<br>";
// }



for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
        echo $multiDim[$i][$j];
        echo " ";
    }
    // echo var_dump($multiDim[$i]);
    echo "<br>";
}

?>