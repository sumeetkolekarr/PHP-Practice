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

$sql = "DELETE FROM `sign_up` WHERE `sign_up`.`Name` = 'Bunny' LIMIT 9";

$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff<br>";
if ($result) {
    echo "We Deleted the record successfully";
}
else{
    $err = mysqli_error($conn);
    echo "We could not Delete the record successfully due to the error --> $err";
}



?>