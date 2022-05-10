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
  	<link href="search.css" rel="stylesheet">
	<title>REPORTS</title>


</head>
<body>
	<a id="logout" href="/controllers/logout.php">LOG OUT</a>
	<nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><img id="logo" src="logo.png" alt='logo'>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
            </div>
        </div>
		<div>
            <a id="h1">REPORTS</a>
			<a class="active" href="index.php" id="link">HOME</a> 	
			<a href="index.php" id="back">BACK</a>
        </div>
	<div class="background">
			<div class="shape"></div>
			<div class="shape"></div>
	</div>
	<div>
		<button id="weekSales">Weekly Sales</button>
		<button id="memberReport">Member Report</button>
		<button id="topProduct">Top Product Report</button>
		<button id="StockOrderList">Stock Order List</button>
	</div>


	<div id="copyright">
	<p id="footertop">© Copyright 2022</p>
	<p id="footerbottom">All Rights Reserved. Powered by the best team in SWE30011.</p>
</body>
</html>