<?php

// Connecting to a DataBase 
$servername = "localhost";
$username = "root";
$password = "";
$database = "BunnyCat";

// Create a Connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if Connection was not successful
if (!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{
    echo "Connection was Successful<br>";
}

// Create a table in DB
$sql = "CREATE TABLE `bunnycat`.`employeestb` (`sno` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `age` INT(11) NOT NULL , `gender` VARCHAR(11) NOT NULL , PRIMARY KEY (`sno`))";

$result = mysqli_query($conn, $sql);

// Check for the Table creation
if($result){
    echo "The Table was successfully created <br>";
}
else{
    echo "The DB was not successfully created because of the error --> ";
    echo mysqli_error($conn);
}

?>




