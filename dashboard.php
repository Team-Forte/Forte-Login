<?php
include('session.php');
include ('header.php');
 echo 'Welcome '. $_SESSION['name']. ' You are successfully Logged In '; 
?>,
 <a href="logout.php">logout</a>

 <body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		
	</div>
	<div class="form-container sign-in-container" style="padding-top:3rem">
		<h2>Our Team Welcomes You</h2>
<img src="assets/images/IMG_20190420_203954_064.jpg" style="border-radius:50%; display:block; margin: auto;"  width="220"/>
		
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div>
			<div class="overlay-panel overlay-right">
				<h2>Hello! <?echo $_SESSION['name']?></h2>
				<p>Lets get you<br> started with us</p>
				<button class="ghost" id="signUp"><a href="index.html">Continue</a></button>
			</div>
			<!--<div class="overlay-panel overlay-left">
				<h2>GREAT!!!</h2>
				<p>Almost Done</p>
				<button class="ghost" id="signIn">Done</button>
			</div>-->
		</div>
	</div>
</div>

<!-- Note: Closing body tag is including in the footer.html file -->
<?php include('footer.php'); ?>
