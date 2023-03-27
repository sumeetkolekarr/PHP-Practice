<?php

// Connecting to a DataBase 
$servername = "localhost";
$username = "root";
$password = "";
$database = "BunnyCat";

// Create a Connection
$con = mysqli_connect($servername, $username, $password, $database);

// Die if Connection was not successful
if (!$con){
    die("Sorry we failed to connect: " . mysqli_connect_error($con));
}
else{
    echo "Connection was Successful<br>";
}

// Variables 
$name = "Cookie";
$sno = "";
$age = 1;
$gender = "Male";

// SQL Query to be executed
$sql = "INSERT INTO `employees` (`sno`, `name`, `age`, `gender`) VALUES ('', 'Bunny', '2', 'Male')";
$result = mysqli_query($con, $sql);

// Add a new DB in BunnyCat DB
if($result){
    echo "The record has been inserted successfully! <br>";
}
else{
    echo "The record was not successfully inserted because of this error --> ";
    // echo mysqli_error($con);
}


?>