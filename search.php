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
	<h1>Member search result</h1>

	<br>
	Hello, <?php echo $_SESSION['username']; ?>
	</br>
	
	<!make here display the searched name>
	<br>
	search result for, <?php echo $_SESSION['username']; ?>
	</br>

	<fieldset>
		<h3>Personal Details</h3>
		<label for="First_name">Member Id:</label><?php echo $_SESSION['username']; ?><br><br>

		<label for="First_name">First name:</label><?php echo $_SESSION['username']; ?><br><br>

		<label for="Last_name">Last name:</label><?php echo $_SESSION['username']; ?><br><br>

		<label for="Email">Email Address:</label><?php echo $_SESSION['username']; ?><br><br>

		<label for="Phone">Phone number:</label><?php echo $_SESSION['username']; ?><br><br>

		<label for="address">Address:</label><?php echo $_SESSION['username']; ?><br><br>

		<label for="suburb">Suburb:</label><?php echo $_SESSION['username']; ?><br><br>

		<label for="post_code">Post Code:</label><?php echo $_SESSION['username']; ?><br><br>

		<hr>
		<! place holder to add sales for the member>
		<form method="post" action="sales.php">
			<button type="submit" class="registerbtn">Add Sales</button>
		</form>
	</fieldset>


	<a href="index.php">Home</a>
	<a href="editMember.php">Edit member</a>
	<a href="deleteMember.php">Delete member</a>

</body>
</html>