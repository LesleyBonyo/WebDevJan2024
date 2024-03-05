<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display</title>
	<style>
		table {
			margin: auto;
		}
		table, th, td{
			border: 1px solid black;
			border-collapse: collapse;
		}
		th{
			background-color: lightblue;
		}
	</style>
</head>
<body>
	<h1>Registered Students</h1>
	<table>
		<tr>
			<th>Student ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Course</th>
			<th>Age</th>
			<th>Delete</th>
			<th>Update</th>
		</tr>
<?php
	//connect to db
	include 'connectdb.php';
	//read operation/select
	$sql = "SELECT * FROM students";
	//execute query
	$result = mysqli_query($connect, $sql);
	if ($result) {
		//mysqli_fetch_assoc();
		// fetch the data from the db as an associative array
		// $row = mysqli_fetch_assoc($result);
		// $last_name = $row['first_name'];
		// echo $last_name;
		while ($row = mysqli_fetch_assoc($result)) {
			$student_id = $row['student_id'];
			$first_name = $row['first_name'];
			$last_name = $row['last_name'];
			$course = $row['course'];
			$age = $row['age'];

			echo "<tr>
					<td>$student_id</td>
					<td>$first_name</td>
					<td>$last_name</td>
					<td>$course</td>
					<td>$age</td>
	<td><button><a href='delete.php?deleteid=$student_id'>Delete</a></button></td>
	<td><button><a href='update.php?updateid=$student_id'>Update</a></button></td>
				</tr>";
		}
	}
?>
	</table>

</body>
</html>