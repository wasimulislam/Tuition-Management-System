<?php  
require_once 'controller/studentInfo.php';

$student = fetchStudent($_GET['id']);
    include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Username</th>
			<th>Password</th>
			<th>Gender</th>
			<th>TGender</th>
			<th>Current_Institution</th>
			<th>Class</th>
            <th>Phone_No</th>
            <th>Area</th>
            <th>Salary</th>
			<th>Date of Birth</th>
			<th>Action</th>
		</tr>
	<tr>
		<td><a href="showStudent.php?id=<?php echo $student['ID'] ?>"><?php echo $student['Name'] ?></a></td>
		<td><?php echo $student['Email'] ?></td>
				<td><?php echo $student['Username'] ?></td>
				<td><?php echo $student['Password'] ?></td>
				<td><?php echo $student['Gender'] ?></td>
				<td><?php echo $student['TGender'] ?></td>
				<td><?php echo $student['Current_Institution'] ?></td>
				<td><?php echo $student['Class'] ?></td>
				<td><?php echo $student['Phone'] ?></td>
				<td><?php echo $student['Area'] ?></td>
				<td><?php echo $student['Salary'] ?></td>
				<td><?php echo $student['DOB'] ?></td>
		
	</tr>

</table>


</body>
</html>