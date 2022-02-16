<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign UP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form action="signup.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-70">
						Sign UP <i class='far fa-address-book'></i>

					</span>
					<span class="login100-form-avatar">
						<img src="images\K2.webp" alt="AVATAR">
					</span>

					<?php 
                     if (isset($_GET['error'])) 
                     {
                        if($_GET['error'] == "Error")
                        {
                            echo '<br><center><br><h5 >Votre nom d\'utilisateur ou votre Mot de passe est Incorrect</h5><center>';
                        
                        }
                       
                     }
					 ?>
					 
					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="user" placeholder="Username" required>
					</div>

                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="passwd" placeholder="Password" required>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Email">
						<input class="input100" type="text" name="email" placeholder="Email" required>
					</div>
				
					<div class="container-login100-form-btn">
						<input class="btn btn-info" type="submit" name="entrer" value="Sign Up">
							
						
					</div>
					
				<br>

						<li> <center>
							<span class="txt1">
								You have an account?
							</span>

							<a href="index.php" class="txt2 text-info">
								Sign In
							</a></center>
						</li>
					
				</form>
			</div>
		</div>
	</div>
	



</body>
</html>
