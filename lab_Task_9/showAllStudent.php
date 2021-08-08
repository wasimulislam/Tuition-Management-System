<?php  
require_once 'controller/studentInfo.php';

$student = fetchAllStudent();


    include "header.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<fieldset style="width: 80%;">
  <legend><h1>DISPLAY:</h1></legend>
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
	
	<tbody>
		<?php foreach ($student as $i => $student): ?>
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

				<td><a href="editStudent.php?id=<?php echo $student['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteStudent.php?id=<?php echo $student['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
</table></fieldset>
</body>
</html>