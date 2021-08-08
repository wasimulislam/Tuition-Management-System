<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Sign In</title>
</head>

<script type="text/javascript">

        function validateForm() 
        {
            var minNumberofChars = 5;
            var maxNumberofChars = 16;
            var regularExpression  =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,16}$/;
            var regex = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;

 
            var username=document.Form.username.value;  
            var password=document.Form.password.value;


            if (username == null || username == "") 
            {
                alert("Username can't be blank");
                return false;
            } 
             else if(regex.test(username)) 
            {  
              alert("Username cannot contain any special character");  
              return false;  
            }
            else if(password==null || password=="") 
            {  
              alert("Password can't be blank");  
              return false;  
            }  
            else if(password.length<5) 
            {  
              alert("Password must be at least 5 characters long");  
              return false;  
            }  
            else if(!regularExpression.test(password))
            {  
              alert("Password should contain atleast one number and one special character");  
              return false;  
            } 
        }
        
    </script>

<body>
    <div class="menu">
        <?php include 'header.php'; ?>
    </div>


    <center>
    <div class="col-4 col-s-4">
    
        <b><h1 align="center">LOGIN as Student</h1></b></div></center>

<div class="col-4 col-s-4"><center>
    
<form name="Form" action="controller/signStudent.php" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
            <br><br>
                
                User Name:
                    <input type="text" name="username" placeholder="Enter your username."><br><br>
                Password:
                    <input type="password" name="password" placeholder="Enter Password"><br><br>
        
            <input name="remember" type="checkbox">Remember Me<br /><br />
            <input type="submit" name="submit" value="submit">
            <input type="button" onclick="location.href='Forget.php';" value='Forget Password?'>

             <?php

            if (isset($_SESSION['uname'])) 
            {
                setcookie('STATUS', 'OK', time() + 3600, '/');
                header('location: dash.php');    
            } 
             
            ?> 
        </form></center>
    </div>


    <div class="menu">
        <?php include 'Footer.php'; ?>
    </div>

</body>
</html>