<?php

function connecTDatabase(){   //function to connect to database
  //connect to the database
try{
$dsn='mysql:host = localhost; dbname=forte';
$user_name = "root";
$user_password = "things";
$conn = new PDO($dsn, $user_name, $user_password );
} catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
  return $conn;
}



function head($title){                //function to set document head
$headcontent=<<<HTML

        <meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
        <base href="http://127.0.0.1/www.forte.com/">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Sanchez&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Forte SignUp/SignIn</title>
	
HTML;
return $headcontent;
}

?>