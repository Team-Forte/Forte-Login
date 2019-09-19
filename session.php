<?php
 session_start(); 
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
<script>
window.location = "index.php";
</script>
<?php
}
$session_id=$_SESSION['id'];
include ('db_con.php');
$query= mysqli_query($conn, "select * from users where id = '$session_id'")or die(mysqli_error($conn));
	$row = mysqli_fetch_array($query);
	$user_username = $row['name'];
?>