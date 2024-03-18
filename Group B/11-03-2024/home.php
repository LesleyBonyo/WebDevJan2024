<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
	<h1>Task App</h1>
	<?php
		session_start();
		$email = $_SESSION['email'];
		echo "Welcome $email";

	?>

</body>
</html>