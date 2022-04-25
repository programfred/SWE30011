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
	<link rel="icon" type="image/x-icon" href="favicon.ico">
  	<link href="css.css" rel="stylesheet">
  	<link href="editmember.css" rel="stylesheet">
</head>
<body>

	<a id="logout" href="/controllers/logout.php">LOG OUT</a>
	<nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><img id="logo" src="logo.png" alt='logo'>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
            </div>
        </div>
		<div>
            <a id="h1">EDIT MEMBER RECORDS</a>
			<a class="active" href="index.php" id="link">HOME</a> 	
        </div>
	<div class="background">
			<div class="shape"></div>
			<div class="shape"></div>
	</div>
	<form method="post" action="controllers/updateMember.php">
		<fieldset>
			<h3>Personal Details</h3>
			<label for="First_name">Member ID: </label><input type="text" name="memberID" value="<?php echo $_SESSION['memberID']; ?>" readonly><br><br>

			<label for="First_name">First name: </label><input type="text" name="firstname" value="<?php echo $_SESSION['memFirstName']; ?>" ><br><br>

			<label for="Last_name">Last name: </label><input type="text"  name="lastname" value="<?php echo $_SESSION['memLastName']; ?>"><br><br>

			<label for="Email">Email Address: </label><input type="text" name="email" value="<?php echo $_SESSION['memEmail']; ?>" size="40"><br><br>

			<label for="Phone">Phone number: </label><input type="text" name="mobile" value="<?php echo $_SESSION['memMobile']; ?>" ><br><br>

			<label for="address">Address: </label><input type="text" name="streetAddress" value="<?php echo $_SESSION['memAddress']; ?>"><br><br>

			<label for="suburb">Suburb: </label><input type="text" name="suburb" value="<?php echo $_SESSION['memSuburb']; ?>"><br><br>

			<label for="post_code">Postcode: </label><input type="text" name="postcode" value="<?php echo $_SESSION['memPostcode']; ?>"><br><br>
			<hr>
			<button type="submit" class="registerbtn">Save</button>
		</fieldset>
	</form>

	<a href="search.php" id="back">BACK</a>

	<div id="copyright">
	<p id="footertop">© Copyright 2022</p>
	<p id="footerbottom">All Rights Reserved. Powered by the best team in SWE30011.</p>
</div>
</body>
</html>