<?php


			
							
			 $user=$_POST['username'];
			 $pass=$_POST['password'];
			 
			 include ('configure.php');
			 
			$sql="SELECT * FROM signin where email='$user' and password=$pass";

	$result=mysqli_query($con,$sql);
	if($result==1)
	{
	
		header("location:fixed-student-dashboard.html");
		
	}
	else{
		
		echo "Login failed";
	}
?>	