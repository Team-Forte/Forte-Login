												jQuery(document).ready(function(){
												jQuery("#register").submit(function(e){
														console.log('yesss');
														e.preventDefault();
														var formData = jQuery(this).serialize();
																												console.log(formData);
														$.ajax({
															type: "POST",
															url: "register.php",
															data: formData
														})
														.done(function(html){
															 if (html == 'success'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("You have successfully Register", { header: 'Access Granted' });
															var delay = 3000;
																setTimeout(function(){ window.location = 'index.php'  }, delay);   
															}else
															{
															$.jGrowl("User Already exists", { header: 'Login Failed' });
															}
															}).fail(function(html) {
															 console.log(html);
															});
														});
														return false;
													});
									
												jQuery(document).ready(function(){
												jQuery("#login").submit(function(e){
														e.preventDefault();
														var formData = jQuery(this).serialize();
														$.ajax({
															type: "POST",
															url: "login.php",
															data: formData,
															success: function(html){
															 if (html == 'true_admin'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Login Successful", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'dashboard.php'  }, delay);    
															}else
															{
															$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
															}
															}
														});
														return false;
													});
									});
									