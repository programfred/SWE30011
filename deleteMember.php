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
	<h1>Delete Member</h1>
	<! make it desplay the full member name>
	<h2>Are you sure you want to delete <?php echo $_SESSION['username'];?></h2>

	<form method="post" action="deleteMemberConformation.php">
		<button type="submit" class="conformbtn">Conform</button>
	</form>
	<form method="post" action="search.php">
		<button type="submit" class="cancelbtn">Cancel</button><br></br>
	</form>
	<a href="index.php">Home</a>
	<a href="editMember.php">Back</a>

</body>
</html>