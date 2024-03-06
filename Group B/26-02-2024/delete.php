<?php 
	//delete operation
	include 'connectdb.php'; // establish connection to db
	$studentid = $_GET['studentid'];
	$sql = "DELETE FROM students WHERE student_id=$studentid";
	// execute query
	$result = mysqli_query($connect, $sql);
	if($result){
		//echo "Deleted successfully";
		header("location:display.php");
	} else {
		die(mysqli_error($connect));
	}




?>