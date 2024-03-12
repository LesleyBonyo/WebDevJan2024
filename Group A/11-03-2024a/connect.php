<?php
	//connect to db 
	$connect = mysqli_connect('localhost', 'root', '', 'groupa');
	if (!$connect) {
		die(mysqli_connect_error());
	}
?>