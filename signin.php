<html>
<head>
<!-- Material Design Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Roboto Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

	<!-- AdminPlus Lite CSS (includes Bootstrap) -->
	<link type="text/css" href="vendor/adminplus.css" rel="stylesheet">
<link rel="stylesheet" href="vendor/style1.css">

</head>
<body>
<nav class="navbar navbar-light bg-white navbar-full navbar-fixed-top">
		<div class="container">
			<!-- Brand -->
			<a class="navbar-brand" href="index.html">LearnPlus <small class="label label-success">v3.1.0</small> </a>
			
			<ul class="nav navbar-nav pull-xs-right">
				
				<li class="nav-item">
					<a href="log.html" class="btn btn-success btn-rounded btn-navbar" target="_blank"><span class="hidden-xs-down">Login</span> </a>
				</li>
			</ul>
			
			
			<!-- // END Collapse -->
		</div>
	</nav>

	
<div class="box">

  <h2>Sign In</h2>
  <br><br><br>
  <form action="signin_db.php" method="post" enctype="multipart/form-data">
    <div class="inputbox">
       <input type="text" name="student_name" required=""> 
       <label>Student Name</label> 
  </div>
  <div class="inputbox">
        <input type="text" name="email" required="">
		<label>Email</label>
  </div>
   <div class="inputbox">
        <input type="password" name="password" required="">
		<label>Password</label>
  </div>
  <div class="inputbox">
        <input type="password" name="confirm_password" required="">
		<label>Confirm Password</label>
  </div>
   <div class="inputbox">
        <input type="text" name="contact_no" required="">
		<label>Contact No.</label>
  </div>
  <div class="inputbox">
        <input type="text" name="qualification" required="">
		<label>Qualification</label>
  </div>
  
 <div class="inputbox">
        <input type="file" name="photo" required="">
		
  </div>
  <input type="submit" name="submit" value="submit">
  </form>
 </div>  
</body>
</html>