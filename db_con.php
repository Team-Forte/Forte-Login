<?php
$conn =mysqli_connect('localhost','root','');
mysqli_select_db($conn,'test')or die(mysqli_error());
if ($conn){
	echo "great";
}
?>
