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
	<link href="css.css" rel="stylesheet">
	<link href="deletemember.css" rel="stylesheet">
</head>
<body>

<header id="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><img id="logo" src="logo.png" alt='logo'>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
            </div>
        </div>
		<div>
            <a id="h1">DELETE MEMBER</a>
			<a class="active" href="index.php" id="link">HOME</a> 	
			<a href="search.php" id="back">BACK</a>
			<a id="logout" href="/controllers/logout.php">LOG OUT</a>
        </div>
    </nav>
</header>
	<! make it desplay the full member name>
	<h2 id="h2">ARE YOU SURE YOU WANT TO DELETE <?php echo $_SESSION['username'];?></h2>

	<form method="post" action="deleteMemberConformation.php">
		<button type="submit" id="confirm">Confirm</button>
	</form>
	<form method="post" action="search.php">
		<button type="submit" id="delete">Cancel</button><br></br>
	</form>

	<div id="copyright">
	<p id="footertop">© Copyright 2022</p>
	<p id="footerbottom">All Rights Reserved. Powered by the best team in SWE30011.</p>
</body>
</html>