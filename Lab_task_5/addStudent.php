<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php 
        include "header.php";

     ?>

<center>
  <br>
  <fieldset>
    
 <form action="controller/createStudent.php" method="POST" enctype="multipart/form-data">

  <label for="name">Student Name:</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>

  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>

  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>

  <label for="name">Gender:</label><br>

  <input type="radio" id="Male" name="gender" value="Male">
  <label for="Male">Male</label>

  <input type="radio" id="Female" name="gender" value="Female">
  <label for="Female">Female</label>

  <input type="radio" id="other" name="gender" value="other">
  <label for="other">other</label><br>


  <label for="name">Department:</label><br>
  <input type="text" id="dep" name="dep"><br>

  <legend>Date of Birth:</legend>
  <input type="date" name="dob"> <br><br>

  <input type="file" name="image"><br><br>

  <input type="submit" name = "createStudent" value="Create">

  <input type="reset"> 
</form> 
</fieldset>
</center>

</body>
</html>