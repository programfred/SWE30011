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
	
	<!make here display the searched member name>
	<br>
	search result for, <?php echo $_SESSION['username']; ?>
	</br>

	<! change the place holder echo to the editing member details> 
	<fieldset>
		<h3>Personal Details</h3>
		<label for="First_name">Member Id:</label><?php echo $_SESSION['username']; ?><br><br>
		<label for="First_name">First name:</label>
		<input type="text" id="First_name" name="firstname" placeholder="<?php echo $_SESSION['username']; ?>" required="required" /><br><br>
		<label for="Last_name">Last name:</label>
		<input type="text" id="Last_name" name="lastname" placeholder="<?php echo $_SESSION['username']; ?>" required="required" /><br><br>
		<label for="Email">Email Address:</label>
		<input type="email" id="Email" name="email" placeholder="example@email.com" required="required" /><br><br>
		<label for="Phone">Phone number:</label>
		<input type="tel" id="Phone" name="mobile" placeholder="0400 123 456" pattern="\d{10}" required><br><br>
		<label for="address">Address:</label>
		<input type="text" id="address" name="streetAddress" placeholder="123 Main St" required="required" /><br><br>
		<label for="suburb">Suburb:</label>
		<input type="text" id="suburb" name="suburb" placeholder="Suburb" maxlength="30" size="20"><br><br>
		<label for="post_code">Post Code:</label>
		<input type="text" id="post_code" name="postcode" placeholder="Postcode" maxlength="10" size="10"><br><br>
		<hr>

		<form method="post" action="editConformation.php">
			<button type="submit" class="registerbtn">Save</button>
		</form>
	</fieldset>


	<a href="index.php">Home</a>
	<a href="search.php">Back</a>

</body>
</html>