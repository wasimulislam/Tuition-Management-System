<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Page</title>
</head>
<body>
<form>


<fieldset>
<p align="right">Logged in as <?php



echo $_COOKIE["userName"]





?>
<a href="logout.php">| Logout</a> </p>





<img width="200" height="50" src="logo.png">
</fieldset>
<fieldset style="width: 25%;height: 25%; position: absolute;">
<hi> Account </hi>
<hr style="border: 0.2px solid;">
<p>
<ul><br><tr>
<td><a href="dashboard.php"><li>Dashboard</a></li></td>
</tr>
<tr>
<td><a href="view_profile.php"><li>View Profile</li></a></td>
</tr>
<tr>
<td><a href="edit_profile.php"><li>Edit Profile</li></a></td>
</tr>
<tr>
<td><a href="changeprofilepicture.php"><li>Chanage Profile Picture</li></a></td>
</tr>
<tr>
<td><a href="change_password.php"><li>Change Password</li></a></td>
</tr>
<tr>
<td><a href="logout.php"><li>Logout</li></a></td>
</tr></ul></p>
</fieldset>






<tr>
<td></td>
<p align="center"><td>Welcome <?php echo $_COOKIE["userName"]; ?> </td></p>
</tr>




</form>

</body>
<br><br><br><br><br><br><br><br><fieldset><footer><p align=center>Copyright <span>&#169;</span>2021</footer></p></fieldset>
</html>