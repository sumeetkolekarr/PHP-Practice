<?php
echo "Functions in PHP<br>";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

function AvgMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$Bunny = [34, 98, 45, 12, 98, 93];
$sumMark = processMarks($Bunny);
$avgMark = AvgMarks($Bunny);

echo "The marks scored by Bunny is " . $sumMark . "<br>";
echo "The Average marks scored by Bunny is " . $avgMark . "<br>";

$pari = [99, 98, 97, 95, 17, 100];
$sumMarks = processMarks($pari);
$avgMarks = AvgMarks($pari);

echo "The marks scored by Pari is " . $sumMarks . "<br>";
echo "The Average marks scored by Pari is " . $avgMarks . "<br>";



?>