<?php
		include('db_con.php');
		
		$username = $_POST['email'];
		$password = $_POST['password'];
		/* student */
		$query = "SELECT * FROM users WHERE email='$username' AND password='$password'";
		$result = mysqli_query($conn, $query)or die(mysqli_error($conn));
		$row = mysqli_fetch_array($result);
		$num_row = mysql_num_rows($result);

		$pass=$row['password'];
		$email =$row['email'];
		
		if( $num_row > 0 ) { 
		session_start();
		$_SESSION['id']=$row['id'];
		$_SESSION['success'] = "You are now logged in";

		
		
		if($email && $pass){
			echo 'Success';	
		}	
		else{ 
				echo 'false';
		}}	
		?>