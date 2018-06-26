<?php 




include('configure.php');

//$id=$_GET['id'];

if(isset($_GET['id'])&&isset($_GET['status']))
{
	
	$id=$_GET['id'];
	
	$st=$_GET['status'];
	
	
	//$qry="select * from registration_form where id=$id and status='$st'";
	//$result1=mysqli_query($con,$qry);
	//$data1=mysqli_num_rows($result1);
	$qry=mysqli_query($con,"select * from registration_form where id=$id and status='$st'");
	if($row=mysqli_fetch_object($qry))
	{
		$st=$row->status;
	if($st=='pending')
	{
		
		 $st='approved';
		
	
	
	//$first_nm=$_POST['first_nm'];
	//$last_nm=$_POST['last_nm'];
	//$usrnm=$_POST['usrnm'];
	//$passwd=$_POST['passwd'];
	//$date=$_POST['date'];
	//status=$_POST['status'];
	}else if($st=='approved')
	{
		$st='pending';
		
	}
	 $query="update registration_form set status='$st' where id=$id";
	
	$result=mysqli_query($con,$query);
	//$data=mysqli_num_rows($result);
	
	if($result)
	{
		header("location:display.php");
			//echo "Record updated successfully...";
			
	}
	else
	{
			echo "error";
	}
	}
}
?>