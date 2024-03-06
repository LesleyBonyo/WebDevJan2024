<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 8px;
		}
		table {
			margin: auto;
			width: 50%;
		}
		th{
			background-color: lightgrey;
		}
	</style>
</head>
<body>
	<h1>Registered Students</h1>
	<table>
		<tr>
			<th>Student Id</th>
			<th>First Name</th>
			<th>Second Name</th>
			<th>Course</th>
			<th>Age</th>
			<th>Delete</th>
			<th>Update</th>
		</tr>
		<?php 
			// read operation/select
			//connecting to db
			include 'connectdb.php';
			$sql = "SELECT * FROM students";
			// execute query
			$result = mysqli_query($connect, $sql);
			if ($result) {
				//display the data
				// mysqli_fetch_assoc()
				// $students = mysqli_fetch_assoc($result);
				// echo $students['course'];
	while ($students = mysqli_fetch_assoc($result)) {
			$student_id = $students['student_id'];
			$first_name = $students['first_name'];
			$second_name = $students['second_name'];
			$course = $students['course'];
			$age = $students['age'];

			echo "<tr>
			<td>$student_id</td>
			<td>$first_name</td>
			<td>$second_name</td>
			<td>$course</td>
			<td>$age</td>
			<td>
				<button>
	<a href='delete.php?studentid=$student_id'>Delete</a>
				</button>
			</td>
			<td>
				<button>
	<a href='update.php?studentid=$student_id'>Update</a>
				</button>
			</td>

		</tr>";

		}
	}

		?>
	</table>

</body>
</html>