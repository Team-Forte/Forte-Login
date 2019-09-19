<?php
require_once "script/functions.php";

$errorname=''; $erroremail=''; $errorpassword='';
$userName=''; $userEmail=''; $userPassword=''; $suss='';

if(isset($_POST['register'])){
    
    // declare form varible
$userName = trim($_POST['name']);
$userEmail = trim($_POST['email']);
$userPassword = trim($_POST['password']); 

if(strlen($userName) <=0){  
    $errorname = 'Input a name';
}elseif(!is_string($userName)) {
    $errorname = 'Only letters is required';
}

if(!filter_var($userEmail, FILTER_VALIDATE_EMAIL)){  
    $erroremail = 'Input a valid email';
}

if(strlen($userPassword) <=6){  
    $errorpassword = 'Password must be at least 6 charaters';
}



//check if credentials is clean
if( !(strlen($errorname) >4) && !(strlen($erroremail) >4) && !(strlen($errorpassword) >4) ){
   
  $conn=connecTDatabase();          //connect to database
  
  
$st = $conn->prepare("SELECT email FROM users
	WHERE email = ? "); //query database
	$st->execute(array($userEmail));
$emailcount=$st->rowCount();
$conn=null; 
if($emailcount <= 0){
  $conn=connecTDatabase();          //connect to database  
    try{
    $st = $conn->prepare("INSERT INTO users(name,email,password)
      VALUES(:userName,:userEmail,:userPassword)");
    
      $st->bindParam(':userName', $userName);
      $st->bindParam(':userEmail', $userEmail);
      $st->bindParam(':userPassword', $userPassword);
      
      $st->execute();
$conn=null; 
      } catch (PDOException $e) {
           print "Database distress. Retry!: " . $e->getMessage() . "<br/>";
           die();
        } 
$userName=''; $userEmail=''; $userPassword=''; $suss=''; 
}else{
    $errorname= 'Email Exists';
}

   
}


    
}










?>