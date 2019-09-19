<?php
// $conn =mysqli_connect('localhost','root','');
// mysqli_select_db($conn,'test')or die(mysqli_error());
// if ($conn){
// 	echo "great";
// }

$servername = "localhost";
$username = "Put yours";
$password = "secret";
$dbname = "db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
