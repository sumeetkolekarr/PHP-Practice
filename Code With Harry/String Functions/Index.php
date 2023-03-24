<?php
$name = "Bunny is a good Cat";
echo $name;
echo "<br>";

echo "The length of " . "the string is " . strlen($name);
echo "<br>";

echo str_word_count($name);
echo "<br>";

echo strrev($name);
echo "<br>";

echo strpos($name, "Cat");
echo "<br>";

echo strpos($name, "Cats");
echo "<br>";

echo str_replace("Bunny", "Pari", $name);
echo "<br>";

echo str_repeat($name, 30);
echo "<br>";

echo "<pre>";
echo rtrim("     This is a Nice Cat     ");
echo "<br>";
echo ltrim("     This is a Nice Cat     ");
echo "</pre";
echo "<br>";
echo "Refer Documentation for more information on PHP Strings.";
?>