<?php

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
else{
    echo "Connection was Successful<br>";
}

// Create a DB
$sql = "CREATE DATABASE BunnyCat";
$result = mysqli_query($conn, $sql);

// Check for the DataBase creation
if($result){
    echo "The DB was successfully created ";
}
else{
    echo "The DB was not successfully created because of the error --> ". mysqli_error($conn);
}

?>




