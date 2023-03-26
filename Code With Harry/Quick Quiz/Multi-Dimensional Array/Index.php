<?php
echo "3-D Matrix <br>";

$arr = array(
    array(array(1,2),
    array(5,6)),
    array(array(13,14),
    array(17,18)),
    array(array(25,26),
    array(29,30)),
);

for ($i=0; $i < count($arr); $i++) { 
    for ($j=0; $j < count($arr[$i]); $j++) { 
        for ($k=0; $k < count($arr[$j]); $k++) { 
            echo $arr [$i][$j][$k];
            echo " ";
        }
        echo "<br>";
    }
    echo "<br>";
}




?>