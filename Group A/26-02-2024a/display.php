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
		</tr>
<?php
	include 'connectdb.php';
	//read operation/select
	$sql = "SELECT * FROM students";
	//execute query
	$result = mysqli_query($connect, $sql);
	if ($result) {
		// code...
		//mysqli_fetch_assoc();
	}
?>
	</table>

</body>
</html>