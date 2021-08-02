<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log Out</title>
</head>
<body>
<?php 

session_start();

if (isset($_SESSION['uname'])) {
	session_destroy();
	header("location:homepage.php");
	
}

else{
	header("location:homepage.php");
}

 ?>
</body>
</html>