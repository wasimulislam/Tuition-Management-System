<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Change Password</title>
</head>

<body>
    
    <div class="menu">
        <?php include 'header.php';?>
       
    </div>

  <?php
  if (!isset($_SESSION['uname']))
  {
    header('location:SignIn.php');
  }
  ?>


  <?php 
         require_once 'controller/studentInfo.php';
         $student = fetchStudent($_SESSION['uname']);

    ?>

<center>
       
    
<form action="controller/changePass.php" method="POST" enctype="multipart/form-data">

        <legend><b><h1>CHANGE PASSWORD:</h1></b></legend>

        

        Current password: 
        <input type="text" name="Cpass" placeholder="Enter your current password"><br><br>
                   
        New Password: 
        <input type="text" name="Npass" placeholder="Enter new password"><br><br>
                    
        Retype New Password: 
        <input type="text" name="Rpass" placeholder="Retype new password"><br><br>
                   
        <input type="submit" name="changePass" value="Save">
    </form>
    </center>


    <div class="menu">
        <?php include 'Footer.php';?>
    </div>

</body>

</html>