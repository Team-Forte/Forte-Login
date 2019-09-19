<?php
		include('db_con.php');
		
		$email =  mysqli_real_escape_string($conn, $_POST['email']);
		$password1 = mysqli_real_escape_string($conn,$_POST['password']);
		$password = md5($password1);

		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$result = mysqli_query($conn, $query)or die(mysqli_error($conn));
		$row = mysqli_fetch_array($result);
		$num_row = mysqli_num_rows($result);

		$pass=$row['password'];
		$email =$row['email'];
		
		if( $num_row > 0 ) { 
		session_start();
		$_SESSION['id']=$row['id'];
		$_SESSION['success'] = "You are now logged in";
		$_SESSION['name'] = $row['name'];


		if($email && $pass){
			echo 'success';	
		}	
		else{ 
				echo 'false';
		}

	}	
		?>