<?php 
//update operation
	//connect to db
	include 'connectdb.php';
	$studentid = $_GET['studentid'];
	$mysql = "SELECT * FROM students WHERE student_id=$studentid";
	$result = mysqli_query($connect, $mysql);
	if ($result) {
		$record = mysqli_fetch_assoc($result);
		$first_name = $record['first_name'];
		$last_name = $record['second_name'];
		$course = $record['course'];
		$age = $record['age'];
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Pick data user has enter
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$course = $_POST['course'];
		$age = $_POST['age'];
		// query to update user data
		$sql = "UPDATE students SET first_name='$first_name', second_name='$last_name', course='$course', age= $age WHERE student_id=$studentid";
		// execute query
		$result = mysqli_query($connect, $sql);
		if ($result) {
			//echo "Updated Successfully";
			header("location:display.php");
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
	<h1 style="border: 1px red dotted;">Update Student Details</h1>
	<form method="post">
		<label>First Name: </label>
		<input type="text" name="firstname" value="<?php echo $first_name;?>">
		<label>Last Name: </label>
		<input type="text" name="lastname" value="<?php echo $last_name;?>">
		<label>Course: </label>
		<select name="course" >
			<option value="<?php echo $course;?>"><?php echo $course;?></option>
			<option>DBIT</option>
			<option>BICS</option>
			<option>BBIT</option>
		</select>
		<label>Age: </label>
		<input type="number" name="age" value="<?php echo $age;?>">
		<input type="submit" name="update" value="Update">
	</form>

</body>
</html>
