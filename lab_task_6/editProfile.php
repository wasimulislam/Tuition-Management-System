<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Edit profile</title>
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
            <div class="container" style="width:500px;">


<fieldset style="width: 400px; "><legend><b><h1> Edit Profile :</h1></b></legend>

                        
<form action="controller/updateStudent.php" method="POST" enctype="multipart/form-data">

  <label for="name">Name:</label>
  <input value="<?php echo $student['Name'] ?>" type="text" id="name" name="name"><br><br>

  <label for="email">Email:</label>
  <input value="<?php echo $student['Email'] ?>" type="text" id="email" name="email"><br><br>

  <label for="ins">Current_Institution:</label>
  <input value="<?php echo $student['Current_Institution'] ?>" type="text" id="ins" name="ins"><br><br>

  <label for="phone">Phone No:</label>
  <input value="<?php echo $student['Phone'] ?>" type="number" id="phone" name="phone"><br><br>

  <input type="submit" name = "updateStudent" value="Update">
 
</form> 
</fieldset><br><br><br><br>
        </div>
                    
    </center>

<div class="menu">
        <?php include 'Footer.php';?>
</div>

</body>
</html>