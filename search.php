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

	<p>search result for member ID: <?php echo $_SESSION['memberID']; ?></p>

	<fieldset>
		<h3>Personal Details</h3>
		<label for="First_name">Member Id: </label><input type="text" value=" <?php echo $_SESSION['memberID']; ?>" disabled><br><br>

		<label for="First_name">First name: </label><input type="text" value=" <?php echo $_SESSION['memFirstName']; ?>" disabled><br><br>

		<label for="Last_name">Last name: </label><input type="text" value=" <?php echo $_SESSION['memLastName']; ?>" disabled><br><br>

		<label for="Email">Email Address: </label><input type="text" value=" <?php echo $_SESSION['memEmail']; ?>" disabled size="40"><br><br>

		<label for="Phone">Phone number: </label><input type="text" value=" <?php echo $_SESSION['memMobile']; ?>" disabled><br><br>

		<label for="address">Address: </label><input type="text" value=" <?php echo $_SESSION['memAddress']; ?>" disabled><br><br>

		<label for="suburb">Suburb: </label><input type="text" value=" <?php echo $_SESSION['memSuburb']; ?>" disabled><br><br>

		<label for="post_code">Post Code: </label><input type="text" value=" <?php echo $_SESSION['memPostcode']; ?>" disabled><br><br>

		<hr>
		<form method="post" action="sales.php">
			<button type="submit" class="registerbtn">Add Sales</button>
		</form>
	</fieldset>


	<a href="index.php">Home</a>
	<a href="editMember.php">Edit member</a>
	<a href="deleteMember.php">Delete member</a>

</body>
</html>