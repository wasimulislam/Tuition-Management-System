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
<script type="text/javascript">

        function validateForm() 
        {
            var minNumberofChars = 5;
            var maxNumberofChars = 16;
            var regularExpression  =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,16}$/;
            

            var Cpass=document.Form.Cpass.value;
            var Npass=document.Form.Npass.value;
            var Rpass=document.Form.Rpass.value;

            if(Cpass==null || Cpass=="") 
            {  
              alert("Password can't be blank");  
              return false;  
            }  
            else if(Npass==null || Npass=="") 
            {  
              alert("Password can't be blank");  
              return false;  
            }  
            else if(Npass.length<5) 
            {  
              alert("Password must be at least 5 characters long.");  
              return false;  
            }  
            else if(!regularExpression.test(Npass)) 
            {  
              alert("New password should contain atleast one number and one special character");  
              return false;  
            } 

            else if(Rpass==null || Rpass=="") 
            {  
              alert(" Retype Password");  
              return false;  
            }  
            
        }
        
    </script>

<center>
       
    
<form name="Form" action="controller/changePass.php" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">

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