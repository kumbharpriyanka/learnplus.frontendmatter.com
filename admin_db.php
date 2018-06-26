<?php

include('configure.php');

if(isset($_POST['save']))
{
	
    
	
	$filename=$_FILES['profile']['name'];
	$filetype=$_FILES['profile']['type'];
	$filetmp=$_FILES['profile']['tmp_name'];
	
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$website=$_POST['website'];
	
    
	
if(move_uploaded_file($filetmp,"images/".$filename))
	{

	$query="insert into admin(profile,first_name,last_name,email,website) values('$filename','$first_name','$last_name','$email','$website')";
	
	$result=mysqli_query($con,$query);
	if($result)
	{
echo "success";
	//header("location:fixed-instructor-account-edit.php");
	
	}
	else
	{
			echo "error";
	}
	
	
	}	
}
?>