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

$sql = "SELECT * FROM `sign_up`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num . " Records found in the DataBase<br>" ;

$no = 1;
if($num>0){
    // We can fetch in a better way using the while loop
    while ($row = mysqli_fetch_assoc($result)) {
        // echo var_dump($row);
        echo $no . ". Hello " . $row['Name'] . ", Your Concern was '" . $row['Concern'] . "'"; 
        echo "<br>";
        $no = $no + 1;
    }
}

// Usage of WHERE Clause to Update Data
$sql = "UPDATE `sign_up` SET `Name` = 'PariCat' WHERE `sign_up`.`S.No.` = 30";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff<br>";
if ($result) {
    echo "We Updated the record successfully";
}
else{
    echo "We could not update the record successfully";
}


?>