<?php
if(isset($_SESSION['loggedin'])){
    header('location:dashboard.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>DRIVING SCHOOL</title>
		<link rel="stylesheet" href="css/style.css">
		
	</head>
	
	<body>
	
		<div class="container">

			<img class="steering" src="image/car-steering.png" alt="car-steering">

			<div>
				<form  action="logics/loginServlet" method="post"  class="login-form">
					
					<label for="email" hidden>Enter Email</label>
					<input type="email"  name="email" id="email" placeholder="Enter Your Email">

					<label for="password" hidden>Enter Password</label>
					<input type="password" name="password" id="password" placeholder="Enter Your Password">

					<input type="submit" id="loginbutton" value="Login">



				</form>
			</div>
	
		</div>
		
	</body>
	

	
</html>