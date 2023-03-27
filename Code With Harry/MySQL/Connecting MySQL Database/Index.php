<?php
echo "Connecting a MySQL Database to PHP<br>";

// Ways to connect to a MySQL Database
// 1. MySQLi EXTENSION
// 2. PDO 

// Connecting to a DataBase 
$servername = "localhost";
$username = "root";
$password = "";

// Create a Connection
$conn = mysqli_connect($servername, $username, $password);

// Die if Connection was not successful
if (!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

echo "Connection was Successful";
?>