<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form method="post" action="information.php">
		<fieldset>
		<legend>
<b>NAME</b></legend> <br>
<input type="text" name="name"><br>

<hr>

</fieldset>
<br><br>

		<fieldset>
		<legend>
<b>E-MAIL</b></legend> <br>
<input type="text" name="email"><br>

<hr>
</fieldset>

<br><br>

		<fieldset>
		<legend>
<b>GENDER</b></legend> <br>
                        <input name="gender" type="radio" value="male">Male
						<input name="gender" type="radio" value="Female">Female
						<input name="gender" type="radio" value="Other">Other<br>

<hr>
</fieldset>

<br><br>

		<fieldset>
		<legend>
<b>DATE OF BIRTH</b></legend> <br>
                        <input type="text" size="2" name="day"> -
						<input type="text" size="2" name="month"> -
						<input type="text" size="4" name="year" maxlength="4" >
						<font size="2"></font>
<hr>
</fieldset>

<br><br>

		<fieldset>
		<legend>
<b>BLOOD GROUP</b></legend> <br>
                        <select name="bloodGroup">
                    	<option value="Select">Select</option>
                        <option value="O+">A+</option>
                        <option value="O-">O</option>
                        <option value="A+">A</option>
                        <option value="A-">B+</option>
                        <option value="B+">B</option>
                        <option value="B-">AB</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">O+</option>
                        <option value="O-">O</option>
                    </select>
<hr>
</fieldset>
<br><br>

		<fieldset>
		<legend>
<b>DEGREE</b></legend> <br>
                    <input type="checkbox" name ="degree" value = "SSC "/>SSC
                    <input type="checkbox" name ="degree" value = "HSC"/>HSC
                    <input type="checkbox" name ="degree" value = "BSc "/>BSc
                    <input type="checkbox" name ="degree" value = "MSc "/>MSc
<hr>
</fieldset>
<input type="Submit" name="Submit" value="Submit">
</form>
<?php
	error_reporting(0);
	if(!empty($_POST['name']))
{ 
		
	if(strlen($_POST['name'])>=3)
{
	$name = $_POST['name'];
		echo "Name: ".$name."<br/;>";
	} 

	else
{
	    echo " At Least Three Letters"."<br/>"; 
	}
		
{
		echo "Start With a Letter"."<br/>";
	}

	}
	else
{
		echo " Name Cannot be Empty"."<br/>";
	}

	if(!empty($_POST['email']))
{
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
        $email = $_POST['email'];
		echo "Email: ".$email."<br/>";
    } 
    else 
{
        echo " Invalid email address"."<br/>";
    }		
	}
	else
{
		echo " Email Cannot be Empty"."<br/>";
	}
	if(!isset($_POST['gender']))
{ 
        echo "Gender is not selected"."<br/>"; 
    } 
     else
{
    $gender 	= $_POST['gender'];
        echo "Gender: ".$gender."<br/>";
    }

    if(!isset($_POST['degree']))
{ 
    echo "Degree is not selected"."<br/>"; 
    } 
    else
{
    $gender 	= $_POST['degree'];
    echo "Degree: ".$degree."<br/>";
    }

    if($_POST['bloodGroup'] == "Select")
{
    echo "select a Blood Group"."<br/>";
    }
    else
{
    $bloodGroup = $_POST['bloodGroup'];
    echo "Blood Group : ".$bloodGroup."<br/>";
    }
	

	if(!empty($_POST['day']))
{ 
	if(!empty($_POST['month']))
{
	if(!empty($_POST['year']))
{
	$day = $_POST['day'];
	$month= $_POST['month'];
    $year= $_POST['year'];
    if ( checkdate( $month, $day, $year ) === false )
{
    echo "Invalid date" ;
    }
    else
{
    echo "Date of birth: ".$day."/".$month."/".$year."<br/>";
    }
	      		
	}
	else
{
    echo " Date of birth Cannot be Empty"."<br/>";
	}

	}
	else
{
    echo " Date of birth Cannot be Empty"."<br/>";
	}
    
    } 
    else
{
    echo " Date of birth Cannot be Empty"."<br/>";
}

 
?>

</body>
</html>