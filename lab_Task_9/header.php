<div class="header" id="myheader">
   <img width="200" height="80" src="logo.png">
</div>

  <link rel="stylesheet" type="text/css" href="style.css">


<?php 

session_start();

if (isset($_SESSION['uname']))  
{
   
   echo "<p align='right'>";
   
   echo 'Logged in as <span class="username">'.$_SESSION['uname'].'</span>';
    echo "<a href='dash.php'> <b>Dashboard</b></a>";
    echo "<a href='viewProfile.php'><b>View Profile</b></a>";
    echo "<a href='change.php'><b>Change Password</b></a>";
   echo "<a href='Logout.php'> <b>Log Out</b></a></p>";
   
}

else
{
   echo "<p align='right'>";
   echo "<a href='homepage.php'><b>Homepage</b></a>" ;
   echo "<a href='student_reg.php'><b>Request for a tutor</b></a>";
   echo "<a href='teacher_reg.php'><b>Register as tutor</b></a>";
   echo "<a href=''><b>Sign in as Teacher</b></a>";
    echo "<a href='SignIn.php'><b>Sign in as Student</b></a>";
}

 ?>

</p>