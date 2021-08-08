<!DOCTYPE html>
<html>
<head>
 <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
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

	<div class="col-3 col-s-3">

<?php
    if (isset($_SESSION['uname'])) {
        echo "<h1>Hello" . "&#160" . $_SESSION['uname'] . "!</h1>";
    } else {
        header("location:SignIn.php");
    }
?>
</div>

<div class="col-6 col-s-6">
    <p>Search Available Teachers: <input type="text" id="txt1" onkeyup="getresult(1)" placeholder="Enter Department..."></p>

    <div class="page-content">
        <div id="pagination-result"></div>
    </div>
</div>

<script>
function getresult(page) {
    var dep = document.getElementById("txt1").value;
    console.log(dep);

    $.ajax({
        url: "http://"+window.location.host+"/Php program/lab-9/getresult_search.php?page="+page+"&dep="+dep,
        type: "GET",
        success: function(data){
        $("#pagination-result").html(data);
        
        },
        error: function()
        {
            console.log("DATA GET ERROR")
        }
   });
}

getresult(1);
</script>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>


<?php include 'Footer.php';?>
</body>
</html>