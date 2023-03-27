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
echo $num ;
echo " Records found in the DataBase<br>";

// Display the rows returned by the SQL Query 

if($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // We can fetch in a better way using the while loop
    while ($row = mysqli_fetch_assoc($result)) {
        // echo var_dump($row);
        echo $row['S.No.'] . ". Hello " . $row['Name'] . ", Your Concern was " . $row['Concern']; 
        echo "<br>";
    }
}


?>