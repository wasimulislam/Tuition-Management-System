<?php  
require_once 'controller/studentInfo.php';

$students = fetchAllStudents();


    include "header.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
<fieldset>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Username</th>
			<th>Password</th>
			<th>Department</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($students as $i => $student): ?>
			<tr>
				<td><a href="showStudent.php?id=<?php echo $student['ID'] ?>"><?php echo $student['Name'] ?></a></td>
				
				<td><?php echo $student['Email'] ?></td>
				<td><?php echo $student['Username'] ?></td>
				<td><?php echo $student['Password'] ?></td>
				<td><?php echo $student['Gender'] ?></td>

				<td><?php echo $student['Department'] ?></td>

				<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['Name'] ?>"></td>
				<td><a href="editStudent.php?id=<?php echo $student['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteStudent.php?id=<?php echo $student['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>

</fieldset>
</body>
</html>