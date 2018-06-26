<?php

include('configure.php');

if(isset($_POST['submit']))
{
	
    
	
	
	
	$student_name=$_POST['student_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirm_password=$_POST['confirm_password'];
	$contact_no=$_POST['contact_no'];
    $qualification=$_POST['qualification'];
	$filename=$_FILES['photo']['name'];
	$filetype=$_FILES['photo']['type'];
	$filetmp=$_FILES['photo']['tmp_name'];
if(move_uploaded_file($filetmp,"images/".$filename))
	{
	
	$query="insert into signin(student_name,email,password,confirm_password,contact_no,qualification,photo) values('$student_name','$email','$password','$confirm_password','$contact_no','$qualification','$filename')";
	
	$result=mysqli_query($con,$query);
	if($result == 1)
	{
	header("location:log.html");
	
	}
	else
	{
			echo "error";
	}
	
	
	}	
}
?>