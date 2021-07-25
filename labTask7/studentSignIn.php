
 <link rel="stylesheet" type="text/css" href="style.css">
<div class="menu">
<?php include 'navBar.php';
?>


<center>
<div class="col-8 col-s-8">
    <div class="aside">

   
       <b><fieldset>
                <h1>LOGIN as Student</h1>
            </b>


        <form action="controller/signTeacher.php" method="POST" enctype="multipart/form-data">
                
                User Name:
                    <input type="text" name="username" placeholder="Enter your username."><br><br>
                Password:
                   <input type="password" name="password" placeholder="Enter Password"><br><br>
        
            <input name="remember" type="checkbox">Remember Me
            <br /><br />
            <input type="submit" name="submit" value="submit">
            <input type="button" onclick="location.href='Sforget.php';" value='Forget Password?'>

             <?php

            if (isset($_SESSION['uname'])) 
            {
                setcookie('STATUS', 'OK', time() + 3600, '/');
                header('location: dash.php');    
            } 
             
            ?> 
        </form></div></div>
        </fieldset>
  
</center>


<br></br>
<div class="menu">
<?php include 'footer.php';
?></div>