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
	<title>Home</title>
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link href="css.css" rel="stylesheet">
	<link href="index.css" rel="stylesheet">
</head>
<body>

<a id="logout" href="/controllers/logout.php">LOG OUT</a>
<div class="container"><img id="logo" src="logo.png" alt='logo'>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
            </div>
        </div>
		<div>
            <a id="h1">WELCOME TO GOTOGRO-MRM</a>
			<a class="active" href="index.php" id="link">HOME</a> 	
        </div>
</div>

<div class="background2">
			<div id="hello">
				<div id="line1"> 
					Welcome, <?php echo $_SESSION['username']; ?>.
				</div>
				<div id="line2">
					Please select one of the following options
				</div>
	</div>
	<div class="container"><img id="image" src="indeximage.png" alt='image'></div>
 	
	<div id="searchform">
		<form action="controllers/searchMember.php" method="post">
			<input id="search" name="search" type="text" placeholder="Search member here">
			<input id="submit" type="submit" value="Search">
		</form>

		<div class="background">
			<div class="shape"></div>
			<div class="shape"></div>
	</div>

	<div>
		<a id="addmember" href="addMember.php">ADD MEMBER</a>
		<a id="listmember" href="controllers/listMember.php">LIST MEMBERS</a>
	</div>

	<div id="copyright">
	<p id="footertop">© Copyright 2022</p>
	<p id="footerbottom">All Rights Reserved. Powered by the best team in SWE30011.</p>
</body>
</html>