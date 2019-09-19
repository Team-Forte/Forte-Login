<?php
require_once "functions.php";
$errorlogin = '';
if(isset($_POST['LOGIN'])){
  
$emaiL=trim($_POST["email"]);
$password=trim($_POST["password"]);

$conn=connecTDatabase();          //connect to database
$st = $conn->prepare("SELECT email, password FROM users
	WHERE email = ? "); //query email from users table
	$st->execute(array($emaiL));
$emailcount1=$st->rowCount();
foreach ($st->fetchAll() as $row) {
          $hashed_password=  "{$row['password']}";
          
      }

if($emailcount1 >= 1){
  
   if(($password == $hashed_password)){
    
    header('Location: welcome.php'); 
    
   }else{
     $errorlogin = 'Wrong Password';
   }
  
}else{
  $errorlogin = 'User does not Exist';
}

}

?>