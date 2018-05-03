<?php
	if(isset($_POST['submit']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$city=$_POST['city'];
		$review=$_POST['review'];
		

		$con=mysqli_connect("localhost","root","","training");
		$sql="INSERT INTO feedback VALUES ('{$fname}','{$lname}','{$email}','{$city}','{$review}')";
		if(mysqli_query($con,$sql))
		{
				echo "Thanks For Your Feedback..";
				header('Location:../hotelnirvana.html');
		}
		else
		{
			echo "Error occurs please write again..";
			header('Location:home/allreviews/allreviews.html');
		}
	} 
?>