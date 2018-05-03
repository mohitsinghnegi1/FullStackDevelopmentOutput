
<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>My Login Page</title>
	<link rel="stylesheet" type="text/css" href="cssreg/csseffect.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
</head>
<body class="my-login-page">
<?php
if($_SESSION['login']=='yes')
{
	session_unset();
echo "<script>
                    swal({
  title: 'Congratulations! You have successfully registered',
  text: 'Welcome To Our Hotel!',
  icon: 'success',
  button: 'okay',
});     </script>";
}
?>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="hotel.jpg">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h2 class="card-title">Login</h2>
							<form  action="login.php" method="POST">
							 
								<div class="form-group">
									<label for="email">E-Mail Address</label><br>

									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
								</div>

								<div class="form-group">
									<label for="password">Password
										
									</label><br>

									<input id="password" type="password" class="form-control" name="password" required data-eye><br>
									<a href="forgotpage.html" class="float-right">
											Forgot Password?
										</a>
								</div>

								<div class="form-group">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>

								<div class="form-group no-margin">
									<input type="submit" class="btn btn-primary btn-block" value="Login" name="submit">
		
								</div>
								<div class="margin-top20 text-center">
									Don't have an account? <a href="registration_page.php">Create One</a>
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