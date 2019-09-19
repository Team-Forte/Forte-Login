<?php
		include('db_con.php');
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password1 = $_POST['password'];

		// first check the database to make sure 
  // a user does not already exist with the same email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    	echo "false";
    }else{
    $password = md5($password1);
	$query = "INSERT INTO users (name, email, password)VALUES ('$name', '$email', '$password')";
		 mysqli_query($conn,$query)or die(mysqli_error($conn));
		echo "success";

}
		?>