<?php
// Connecting to a DataBase 
$servername = "localhost";
$username = "root";
$password = "";
$database = "web_db";

// Create a Connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if Connection was not successful
if (!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{
    echo "Connection was Successful<br>";
}



?>