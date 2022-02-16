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
	<link rel="stylesheet" type="text/css" href="css/style2.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>


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
							echo '<br><center><br><p style="color:red"  >This Username already exist. </p><center>';

                        }
                       
                     }
					 ?>
						<div class="input-group">

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="user" placeholder="Username" id="contact-name" onkeyup="validateName()" required>
						<span id="name-error"></span>

					</div>
					</div>
						<div class="input-group">
                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="passwd" placeholder="Password" id="contact-password" onkeyup="validatePassword()" required>
						<span id="password-error"></span>

					</div>
					
					</div>

					<div class="input-group">
					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Email" >
						<input class="input100" type="text" name="email" placeholder="Email" id="contact-email" onkeyup="validateEmail()" required>
						<span id="email-error"></span>

					</div>

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
	
	<script src="css/script.js"></script>


</body>
</html>
