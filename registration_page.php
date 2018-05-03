<?php
session_start();
$_SESSION['login']='no';
?>


<!DOCTYPE html>
<html>
<head>
<title>MY_REGISTRATION_PAGE</title>

	<link rel="stylesheet" type="text/css" href="cssreg/csseffect.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="hotel.jpg">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h2 class="card-title">Register</h2>
							<form action="signup.php" method="POST">
							 
								<div class="form-group">
									<label for="name">Name</label>
									<input id="name" type="text" class="form-control" name="name" required autofocus>
								</div>

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" required>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>

								<div class="form-group">
									<label>
										<input type="checkbox" name="aggree" value="1"> I agree to the Terms and Conditions
									</label>
								</div>

								<div class="form-group no-margin">
									<button type="submit" name="login" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="margin-top20 text-center">
									Already have an account? <a href="loginpage.php">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2018 &mdash; Sarbesh 
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>