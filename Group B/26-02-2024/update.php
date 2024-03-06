<?php 
//update operation
	//connect to db
	include 'connectdb.php';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Pick data user has enter
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$course = $_POST['course'];
		$age = $_POST['age'];
		// query to insert user data
		$sql = "INSERT INTO students(first_name, second_name, course, age) VALUES('$first_name', '$last_name', '$course', $age)";
		// execute query
		$result = mysqli_query($connect, $sql);
		if ($result) {
			echo "Registered Successfully";
		} else {
			die(mysqli_error($connect));
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update</title>
</head>
<body>
	<h1>Update Student Details</h1>
	<form method="post">
		<label>First Name: </label>
		<input type="text" name="firstname">
		<label>Last Name: </label>
		<input type="text" name="lastname">
		<label>Course: </label>
		<select name="course">
			<option>DBIT</option>
			<option>BICS</option>
			<option>BBIT</option>
		</select>
		<label>Age: </label>
		<input type="number" name="age">
		<input type="submit" name="update" value="Update">
	</form>

</body>
</html>
