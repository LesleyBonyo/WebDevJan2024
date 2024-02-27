<?php 
//inbuilt variables - superglobals
// pick the form data - using get method

/* $_GET[]
	if (isset($_GET['name'],$_GET['course'] )) {
		$name = $_GET['name'];
		$course = $_GET['course'];

		echo "<h3>Dear $name welcome to $course 2024<h3>";
	}
	*/
// pick the form data - using post method
// $_POST[]
	if (isset($_POST['name'],$_POST['course'] )) {
		$name = $_POST['name'];
		$course = $_POST['course'];

		echo "<h3>Dear $name welcome to $course 2024<h3>";
	}

?>