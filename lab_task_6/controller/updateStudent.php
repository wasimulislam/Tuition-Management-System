<?php  
require_once '../model/model.php';
session_start();

if (isset($_POST['updateStudent'])) 
{
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['ins'] = $_POST['ins'];
	$data['phone'] = $_POST['phone'];



 if (updateStudent($_SESSION['uname'], $data))
  

  	echo '<br>Successfully updated!!';
  	
  	header('Location: ../viewProfile.php');
  }
 
else 
{
	echo 'You are not allowed to access this page.';
}


?>