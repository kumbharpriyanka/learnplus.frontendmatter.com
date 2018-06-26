<?php
			 include ('configure.php');

			
							
			 $user=$_POST['username'];
			 $pass=$_POST['password'];
			 

			 
			//$sql="SELECT * FROM login where username='$user' and password=$pass";
$query="SELECT * FROM login where username='$user' and password=$pass";
	
	$result=mysqli_query($con,$query);
	//$result=mysqli_query($con,$sql);
	if($result)
	{
	
		header("location:fixed-instructor-dashboard.html");
		
	}
	else{
		
		echo "Login failed";
	}
?>	