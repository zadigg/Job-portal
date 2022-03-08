<?php 
session_start(); 

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cssjsfont/admin login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="CSSJSFOnt/admin Login/vendor/bootstrap/css/bootstrap-grid.min.css">


	<link rel="stylesheet" type="text/css" href="CSSJSFOnt/admin Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="CSSJSFOnt/admin Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="CSSJSFOnt/admin Login/css/main.css">
	
	
    <script type="text/javascript" src="CSSJSFOnt/Admin Login/js/adminlogin.js"> </script>
    <script src="jquery-3.5.1.js"></script>

<!-- <script src="cssjsfont/Admin Login/js/adminlogin.js"> </script> -->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="CSSJSFOnt/admin Login/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="index.php" id="admin_login"  name="admin_login">
					<span class="login100-form-title">
						Admin Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email"   id="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" id="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name ="login" id="login">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	


</body>
</html>

<?php


include('connection/db.php');


if (isset($_POST['login'])) {

	$email=$_POST['email'];
	$pass=$_POST['pass'];

	 
$query=mysqli_query($con,"select * from adminlogin where admin_email='$email' and admin_password='$pass' ");
if ($query) {
 
	if (mysqli_num_rows($query)>0) {
		
	  $_SESSION['email']= $email;
	  header('location:admindashboard.php');
	
	}else{
	  echo "<script>alert('Email or password is  incorrect ,Please try again')</script>";
	}
	
	
	}
	}
	
	
	 ?>