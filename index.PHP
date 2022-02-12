
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>My website</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				
				<form action="login.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-70">
						Welcome <i class='far fa-grin-beam'></i>

					</span>
					<span class="login100-form-avatar">
						<img src="images\K2.webp" alt="AVATAR">
					</span>
					
					<span  >
					<?php 
                     if (isset($_GET['error'])) 
                     {
                        if($_GET['error'] == "Error")
                        {
                            echo '<br><center><br><p style="color:red" >Votre nom d\'utilisateur ou votre Mot de passe est Incorrect. </p><center>';
                        
                        }
                       
                     }
                ?></span>
					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="user" placeholder="Username">
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="passwd" placeholder="Password">
					</div>
				
					<div class="container-login100-form-btn ">
						<input class="btn btn-info btn-rounded " type="submit" name="entrer" value="login">
							
						
					</div>
					<br>

						<li><center>
							<span class="txt1">
								Don’t have an account?
							</span>

							<a href="signup1.php" class="txt2 text-info">
								Sign up
							</a>
						</center>
						</li>
					
				</form>
			</div>
		</div>
	</div>
	



</body>
</html>