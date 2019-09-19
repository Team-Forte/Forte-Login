<?php

require_once "script/functions.php";
require_once "script/register.php";
require_once "script/login.php";
?>


<!DOCTYPE html>
  <html style="width: 100%; height: 100%;" lang="en">
    <head>
          <?php echo head('Forte Tech');     ?>     
    </head>
    
    <body>


 <div class="container" id="container">
	<div class="form-container sign-up-container">
	  
	  
	 

		<form id="userInfo" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
                        
                        <?php  echo $suss; ?>
                        <span id="Error1" style="font-size: 12px;color:red;margin-left: 20px;"><?php echo $errorname; ?></span><br/>
			<input type="text" name="name" id="name" value="<?php echo $userName; ?>" placeholder="Name" />
                        
 
                        
                        <span id="Error2" style="font-size: 12px;color:red;margin-left: 20px;"><?php echo $erroremail; ?></span><br/>
			<input type="email" name="email"  value="<?php echo $userEmail; ?>" id="email" placeholder="Email" />
                        
                        
                        
                        <span id="Error3" style="font-size: 12px;color:red;margin-left: 20px;"><?php echo $errorpassword; ?></span><br/>
			<input type="password" name="password" value="<?php echo $userPassword; ?>" id="password" placeholder="Password" />
			
                        
                        
                        <button id= "signup" type="submit" name="register">Sign Up</button>
		</form>
	</div>
        
        
        <div class="form-container sign-in-container">
		<form id="userInfo2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >
			<h1>Sign in to Forte</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
                        
                        <span id="Error2" style="font-size: 12px;color:red;margin-left: 20px;"><?php echo $errorlogin; ?> </span><br/>
			<input type="email" name="email" id="email" placeholder="Email" />
			
                        <span id="Error3" style="font-size: 12px;color:red;margin-left: 20px;"></span><br/>
                        <input type="password" name="password" id="password" placeholder="Password" />
                        
			<div class="boxed"><a href="#">Forgot your password?</a></div>
                        
			<button class= "signin" type="submit" name="LOGIN" >Sign In</button>
		</form>
	</div>
        
        
	
	<div class="overlay-container">
		<div class="overlay">
                    <div class="overlay-panel overlay-right">
				<h2>Hello, Friend!</h2>
				<p>Enter your personal details<br>and start journey with us</p>
				<button  class="ghost" id="signUp">Sign Up</button>
			</div>
                    <div class="overlay-panel overlay-left">
				<h2>Welcome Back!</h2>
				<p>To keep connected with us please<br>login with your personal info</p>
				<button  class="ghost" id="signIn">Sign In</button>
				
			</div>
			
			
		</div>
	</div>
</div>


<footer>
	<p>
		<a target="_blank" href="#">Forte Tech Institute</a>
	
	</p>
</footer>

<script src="https://kit.fontawesome.com/b94aae637f.js"></script>
<script type="text/javascript" src="script/cindy.js"></script>


</body>
</html>


