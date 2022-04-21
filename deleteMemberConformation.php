<?php
session_start();

	if(empty($_SESSION['username'])){
		header("Location: /login.php");
		exit();
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GotoGro Member</title>
</head>
<body>

	<a href="/controllers/logout.php">Logout</a>
	<h1>Member Deleted</h1>
	<a href="index.php">Home</a>

</body>
</html>