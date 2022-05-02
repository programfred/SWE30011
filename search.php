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
  	<link href="includes/css/css.css" rel="stylesheet">
  	<link href="includes/css/search.css" rel="stylesheet">
	  <title>SEARCH</title>
</head>
<body>

<a id="logout" href="/controllers/logout.php">LOG OUT</a>
	<nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><img id="logo" src="includes/images/logo.png" alt='logo'>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
            </div>
        </div>
		<div>
            <a id="h1">SEARCH</a>
			<a class="active" href="index.php" id="link">HOME</a> 	
			<a href="index.php" id="back">BACK</a>
        </div>
	<div class="background">
			<div class="shape"></div>
			<div class="shape"></div>
	</div>
	<form>
	<fieldset>
		<h3>Member Search</h3>
		<h4>Search Result for Member ID: <?php echo $_SESSION['memberID']; ?></h4>
		<label for="First_name">Member ID: </label><input type="text" value="<?php echo $_SESSION['memberID']; ?>" disabled><br><br>

		<label for="First_name">First name: </label><input type="text" value="<?php echo $_SESSION['memFirstName']; ?>" disabled><br><br>

		<label for="Last_name">Last name: </label><input type="text" value="<?php echo $_SESSION['memLastName']; ?>" disabled><br><br>

		<label for="Email">Email Address: </label><input type="text" value="<?php echo $_SESSION['memEmail']; ?>" disabled size="40"><br><br>

		<label for="Phone">Phone number: </label><input type="text" value="<?php echo $_SESSION['memMobile']; ?>" disabled><br><br>

		<label for="address">Address: </label><input type="text" value="<?php echo $_SESSION['memAddress']; ?>" disabled><br><br>

		<label for="suburb">Suburb: </label><input type="text" value="<?php echo $_SESSION['memSuburb']; ?>" disabled><br><br>

		<label for="post_code">Post Code: </label><input type="text" value="<?php echo $_SESSION['memPostcode']; ?>" disabled><br><br>

		<hr>
		<form method="post" action="sales.php">
			<a id="deletemember" href="deleteMember.php">Delete Member</a>
			<a id="editmember" href="editMember.php">Edit Member</a>
		</form>
	</fieldset>
</form>

<div id="copyright">
	<p id="footertop">© Copyright 2022</p>
	<p id="footerbottom">All Rights Reserved. Powered by the best team in SWE30011.</p>

</body>
</html>