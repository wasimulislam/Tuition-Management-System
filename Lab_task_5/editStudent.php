<?php 

require_once 'controller/studentInfo.php';
$student = fetchStudent($_GET['id']);


 include "header.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
</head>
<body>
  <center>
    <br>
  <fieldset>
    <legend>Edit Profile</legend>
  

 <form action="controller/updateStudent.php" method="POST" enctype="multipart/form-data">

  <label for="name">Student Name:</label><br>
  <input value="<?php echo $student['Name'] ?>" type="text" id="name" name="name"><br>

  <label for="surname">Email:</label><br>
  <input value="<?php echo $student['Email'] ?>" type="text" id="email" name="email"><br>

  <label for="username">Username:</label><br>
  <input value="<?php echo $student['Username'] ?>" type="text" id="username" name="username"><br>



  <label for="username">Department:</label><br>
  <input value="<?php echo $student['Department'] ?>" type="text" id="dep" name="dep"><br>

  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateStudent" value="Update">
  <input type="reset"> 
</form> 
</fieldset>
  </center>


</body>
</html>

