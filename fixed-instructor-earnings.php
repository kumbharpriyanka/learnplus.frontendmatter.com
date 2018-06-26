<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from learnplus.frontendmatter.com/fixed-instructor-earnings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jun 2018 08:16:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Instructor - Earnings - Fixed layout</title>

    <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="assets/vendor/simplebar.css" rel="stylesheet">

    <!-- Material Design Icons  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Roboto Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

    <!-- MDK -->
    <link type="text/css" href="assets/vendor/material-design-kit.css" rel="stylesheet">

    <!-- Sidebar Collapse -->
    <link type="text/css" href="assets/vendor/sidebar-collapse.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/style.css" rel="stylesheet">


    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/morris.css">




</head>

<body class="ls-top-navbar">


    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-dark bg-primary m-0 fixed-top">

        <!-- Toggle sidebar -->
        <button class="navbar-toggler d-block" data-toggle="sidebar" type="button">
    <span class="material-icons">menu</span>
  </button>

        <!-- Brand -->
        <a href="fixed-instructor-dashboard.html" class="navbar-brand"><i class="material-icons">school</i> LearnPlus</a>

       

        <div class="navbar-spacer"></div>

        <!-- Menu -->
        
		

        <!-- Menu -->
        <ul class="nav navbar-nav">
            <!-- User dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" role="button"><img src="assets/images/people/50/guy-6.jpg" alt="Avatar" class="rounded-circle" width="40"></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="fixed-instructor-account-edit.html">
      <i class="material-icons">edit</i> Edit Account
    </a>
                    <a class="dropdown-item" href="fixed-instructor-profile.html">
      <i class="material-icons">person</i> Public Profile
    </a>
                    <a class="dropdown-item" href="guest-login.html">
      <i class="material-icons">lock</i> Logout
    </a>
                </div>
            </li>
            <!-- // END User dropdown -->
        </ul>
    </nav>
    <!-- // END Navbar -->

    <div class="container">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="fixed-instructor-dashboard.html">Home</a></li>
            <li class="breadcrumb-item active">Student profile</li>
        </ol>
        
        <div class="card">
            <div class="card-header bg-white text-center">
                <h5 class="card-title">STUDENT PROFILE</h5>
            </div>
			<form action="" method="POST">
            <table class="table table-striped table-middle" style="text-align:center;">
                <thead>
                    <tr class="text-uppercase small">
                        <th class="text-center" style="width:130px">Id</th>
                        <th class="text-center" style="width:130px">Student Name</th>
                        <th class="text-center" style="width:130px">Email</th>
						 <th class="text-center" style="width:130px">Password</th>
						  <th class="text-center" style="width:130px">Contact No.</th>
						   <th class="text-center" style="width:130px">Qualification</th>
						   <th class="text-center" style="width:130px">Profile</th>
                    </tr>
                </thead>
                <tbody>
				<?php
                   include('configure.php');


                   $query="select * from signin";
                   $result=mysqli_query($con,$query);


	while($row=mysqli_fetch_assoc($result))

{

                   echo "<tr>";
                      echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['student_name']."</td>";
                       echo "<td>".$row['email']."</td>";
						echo "<td>".$row['password']."</td>";
                        echo "<td>".$row['contact_no']."</td>";
						echo "<td>".$row['qualification']."</td>";
						echo "<td>";?><img src="images/<?php echo $row['photo']; ?>"style="height:50px; width:50px"><?php echo "</td>";
                        
                   echo "</tr>";
                    

}
?>

                </tbody>
            </table></form>
        </div>

       
    </div>




    <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
        <div class="mdk-drawer__content ls-top-navbar-xs-up">
            <div class="sidebar sidebar-left sidebar-light bg-white o-hidden">
                <div class="sidebar-p-y" data-simplebar data-simplebar-force-enabled="true">
                    <div class="sidebar-heading">APPLICATIONS</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="fixed-student-dashboard.html">
              <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> STUDENT
            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="fixed-instructor-dashboard.html">
              <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i> ADMIN
            </a>
                        </li>
                    </ul>
<!--<div class="sidebar-heading">Layout</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="instructor-earnings.html">
              <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Fluid Layout
            </a>
                        </li>
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="fixed-instructor-earnings.html">
              <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Fixed Layout
            </a>
                        </li>
                    </ul>-->
                    <div class="sidebar-heading">ADMIN</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="fixed-instructor-courses.html">
              <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> Course Manager
            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="fixed-instructor-quizzes.html">
              <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">help</i> Quiz Manager
            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="fixed-instructor-profile.html">
              <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">language</i> Public Profile
            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="fixed-instructor-account-edit.html">
              <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i> Account Settings
            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="fixed-instructor-messages.html">
              <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">comment</i> Messages
            </a>
                        </li>
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="fixed-instructor-earnings.php">
              <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Student profile
            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="fixed-instructor-statement.html">
              <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">receipt</i> Statement
            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="guest-login.html">
              <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> Logout
            </a>
                        </li>
                    </ul>
                    <!-- Components menu 
                    <div class="sidebar-heading">UI Components</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#ui-components">
      <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i> 
      UI Components
      <span class="ml-auto sidebar-menu-toggle-icon"></span>
    </a>
                            <ul class="sidebar-submenu sm-condensed collapse" id="ui-components">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="ui-buttons.html">Buttons</a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="ui-cards.html">Cards</a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="ui-tabs.html">Tabs</a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="ui-tree.html">Tree</a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="ui-nestable.html">Nestable</a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="ui-notifications.html">Notifications</a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="ui-progress.html">Progress Bars</a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="ui-forms.html">Forms</a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="ui-tables.html">Tables</a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="ui-charts.html">Charts</a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="ui-calendar.html">Calendar</a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="ui-maps-vector.html">Maps Vector</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    // END Components Menu -->
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Simplebar -->
    <!-- Used for adding a custom scrollbar to the drawer -->
    <script src="assets/vendor/simplebar.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/dom-factory.js"></script>
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- Sidebar Collapse -->
    <script src="assets/vendor/sidebar-collapse.js"></script>

    <!-- App JS -->
    <script src="assets/js/main.js"></script>


    <!-- Theme Colors -->
    <script src="assets/js/colors.js"></script>

    <!-- Required by CHART (morrisjs) -->
    <script src="assets/vendor/raphael.min.js"></script>
    <script src="assets/vendor/morris.min.js"></script>



    <!-- Init -->
    <script src="assets/js/chart.js"></script>



</body>


<!-- Mirrored from learnplus.frontendmatter.com/fixed-instructor-earnings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jun 2018 08:16:57 GMT -->
</html>