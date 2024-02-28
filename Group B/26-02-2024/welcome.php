<?php 
// form handling
// getting form data submitted by the user
//in built variables
// using get method 
/* $_GET[]
	if (isset($_GET['firstname'], $_GET['unit'])) {
		
		$first_name = $_GET['firstname'];
		$unit = $_GET['unit'];

		echo "<h3>Welcome $first_name to $unit</h3>";
	} */
// using post method
// $_POST[]
	if (isset($_POST['firstname'], $_POST['unit'])) {
		
		$first_name = $_POST['firstname'];
		$unit = $_POST['unit'];

		echo "<h3>Welcome $first_name to $unit</h3>";
	}

?>