<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>
	<h1>Course Registration</h1>
	<form method="post">
		<label>First Name: </label>
		<input type="text" name="firstname">
		<label>Last Name: </label>
		<input type="text" name="lastname">
		<label>Course: </label>
		<select name="course">
			<option>BBIT</option>
			<option>DBIT</option>
			<option>DBM</option>
		</select>
		<label>Age : </label>
		<input type="number" name="age">
		<input type="submit" name="register" value="Register">
	</form>
	<?php
	//connect to db
	include 'connectdb.php';
	//run this code only when the user click register
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Pick data user has entered
	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$course = $_POST['course'];
	$age = $_POST['age'];
	// create operation/insert
	$sql = "INSERT INTO students(first_name, last_name, course, age) VALUES('$first_name', '$last_name', '$course',  $age)";
	// execute query
	$result = mysqli_query($connect, $sql);
	if ($result) {
		echo "registration successful";
	} else {
		die(mysqli_error($connect));
	}

		
	}

	?>
</body>
</html>