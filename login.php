<html>
<head>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php

	if(isset($_POST['submit']))
	{
		session_start();
		$_SESSION['email']=$_POST['email'];
		$_SESSION['password']=$_POST['password'];		
		$con=mysqli_connect("localhost","root","","hotel");
		$sql="select password from signup where email='{$_SESSION["email"]}'";
		if($result=mysqli_query($con,$sql))
		{
		$row=mysqli_fetch_row($result);
		{
			if($_SESSION["password"]==$row[0])
			{	

			echo '<script type="text/javascript">'; 

echo "swal({
  title: 'Good job! Rooms Booked',
  text: 'Welcome To Our Hotel!',
  icon: 'success',
  button: 'okay',
});"; 
header("refresh:5;");
echo 'window.location.href = "hotelnirvana.html";';

echo '</script>';
					
				//	header("location:hotelnirvana.html");
				
					
					exit;
				
			}
			else
			{
			header("Location: loginpage.php");
					
					exit;
			}
		}
	}
}

?>
</body>
</html>