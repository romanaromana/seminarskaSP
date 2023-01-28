<?php   
$servername = "localhost";  //replace your servername
$username = "root";   //replace your username
$password = "root";        //replace your password
$dbname = "my_project";    //replace your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo ' not connected';
}
else
    $conn

?>