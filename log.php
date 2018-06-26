
<!-- saved from url=(0032)http://localhost/sample/log.html -->
<html><head>

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
			
			
			
			<!-- // END Collapse -->
		</div>
	</nav>

<div class="box">
  <h2>Login</h2>
  <form action="log_db.php" method="post" enctype="multipart/form-data">
    <div class="inputbox">
       <input type="text" name="username" required=""> 
       <label>Username</label> 
  </div>
  <div class="inputbox">
        <input type="password" name="password" required="">
		<label>password</label>
  </div>
  <input type="submit" name="submit" value="Submit">
  </form>
 </div>  

</body></html>