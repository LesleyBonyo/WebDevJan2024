<?php
	//code to add tasks the student enters
	session_start();
	$user_id = $_SESSION['userid'];
	include "connect.php";
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$task_name = $_POST['task_name'];
		$deadline = $_POST['deadline'];
		$sql = "INSERT INTO tasks(task_name, deadline, user_id) VALUES('$task_name', '$deadline', $user_id)";
		$result = mysqli_query($connect, $sql);
		if ($result) {
			//echo "Task added successfully";
			header("location:home.php");
		} else{
			die(mysqli_error($connect));
		}
	}




?>