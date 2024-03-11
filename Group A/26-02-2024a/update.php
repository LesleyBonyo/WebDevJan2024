<?php 
include 'connectdb.php';
$updateid = $_GET['updateid'];
$sql = "SELECT * FROM students WHERE student_id=$updateid";
$result = mysqli_query($connect, $sql);
if ($result) {
	$student = mysqli_fetch_assoc($result);
	$first_name = $student['first_name'];
	$last_name = $student['last_name'];
	$course = $student['course'];
	$age = $student['age'];
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
	<h1>Update Course Details</h1>
	<form method="post">
		<label>First Name: </label>
		<input type="text" name="firstname" value="<?php echo $first_name; ?>">
		<label>Last Name: </label>
		<input type="text" name="lastname" value="<?php echo $last_name; ?>">
		<label>Course: </label>
		<select name="course">
			<option value="<?php echo $course; ?>"><?php echo $course; ?></option>
			<option>BBIT</option>
			<option>DBIT</option>
			<option>DBM</option>
		</select>
		<label>Age : </label>
		<input type="number" name="age" value="<?php echo $age; ?>">
		<input type="submit" name="register" value="Update">
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
	$sql = "UPDATE students SET first_name='$first_name', last_name='$last_name', course='$course', age=$age WHERE student_id=$updateid";
	// execute query
	$result = mysqli_query($connect, $sql);
	if ($result) {
		//echo "Update successful";
		header('location:display.php');
	} else {
		die(mysqli_error($connect));
	}

		
	}

	?>
</body>
</html>