<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>User dashboard</title>
</head>
<body>


<div class="menu">
<?php include 'header.php';
?>
</div>

<center>

	<?php 
	
	if (isset($_SESSION['uname'])) 
	{
		echo "<h1>Hello"."&#160". $_SESSION['uname'] ."!</h1>";

echo "<h1>Logged in as Student.</h1>
<p><br><br>
<a href='teacher.php'><b>View Premium Teachers </b></a> 



  <br>";


}
else{
		header("location:SignIn.php");
		
	}

	$username="";
	if(isset($_COOKIE['user']))
	{
		$user= $_COOKIE['user'];
		$username= $user["username"];
    }
	?>

	

</center>
<div class="menu">
<?php include 'Footer.php';
?></div> 

</div>
</body>
</html>