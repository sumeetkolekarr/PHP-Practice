<?php
$a = date('j F Y');
$b = date('H:i:s T');
$dt = new DateTime('now', new DateTimezone('Asia/Kolkata'));
echo $dt->format('F j, Y, g:i a');
echo "<br>";

echo "Today's Time is " . $b . "<br>";
echo "Today's Date is " . $a . "<br>";
?>