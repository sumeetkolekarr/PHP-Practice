<?php
$age = -65;

if (($age>25) && ($age<=65)){
    echo "You can Drive";
}
elseif (($age>0) && ($age<25)) {
    echo "You can not Drive";
}
elseif (($age>65) && ($age<150)) {
    echo "You can not Drive";
}
else {
    echo "Give the Input Correctly";
}

?>