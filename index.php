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
	<title>GotoGro-MRM</title>
</head>
<body>

<a href="/controllers/logout.php">Logout</a>
	<h1>Welcome to GotoGro</h1>
	<br>
	Hello, <?php echo $_SESSION['username']; ?>
 	</br>

 	<form action="controllers/searchMember.php" method="post">
	<input id="search" name="search" type="text" placeholder="Search member here">
	<input id="submit" type="submit" value="Search">
	</form>

	<a href="addMember.php">Add a new member</a>
	<a href="controllers/listMember.php">list member</a>
</body>
</html>