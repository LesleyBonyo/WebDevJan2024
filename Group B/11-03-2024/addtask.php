<?php
	session_start();
	include "connect.php";
	$user_id = $_SESSION['id'];
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$task_name = $_POST['task_name'];
		$due_date = $_POST['due_date'];
$sql = "INSERT INTO tasks(task_name,due_date,user_id) VALUES('$task_name','$due_date', $user_id)";
$result = mysqli_query($connect, $sql);
if ($result) {
	//echo "Task added successfully";
	header("location:home.php");
} else{
	die(mysqli_error($connect));
	}
}





?>