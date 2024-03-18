<?php
	//ensure that the user has logged in before accessing this page
	session_start();
	if (!isset($_SESSION['email'],$_SESSION['userid'])) {
		header("location:login.php");
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Task App</title>
</head>
<body>
	<a href="logout.php">Logout</a>
	<h1>Student Task Manager</h1>
	<?php
		//session_start();
		$email = $_SESSION['email'];
		echo "Welcome $email";
	?>
	<h2>Add Task</h2>
	<form method="post" action="addtask.php">
		<label>Task Name: </label>
		<input type="text" name="task_name">
		<label>Deadline: </label>
		<input type="date" name="deadline">
		<input type="submit" name="add" value="Add Task">
	</form>
	<h2>My Tasks</h2>
	<table>
		<tr>
			<th>Task Name</th>
			<th>Deadline</th>
			<th>Completed</th>
		</tr>
		<?php
		//display user tasks
		include "connect.php";
		$user_id = $_SESSION['userid'];
		$sql = "SELECT * FROM tasks WHERE user_id=$user_id";
		$result = mysqli_query($connect, $sql);
	if ($result) {
		while($task = mysqli_fetch_assoc($result)){
			$task_name = $task['task_name'];
			$deadline = $task['deadline'];
			echo "<tr>
			<td>$task_name</td>
			<td>$deadline</td>
			<td><input type='checkbox'></td>
		</tr>";
			} 
		}
		?>
	</table>

</body>
</html>