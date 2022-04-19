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
	<title>My website</title>
</head>
<body>

<a href="/controllers/logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	Hello, <?php echo $_SESSION['username']; ?>
</body>
</html>