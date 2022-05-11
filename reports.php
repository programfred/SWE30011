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
		<button id="weekSales" onclick="weekSales()">Weekly Sales</button>
		<div id="1"></div>
		<button id="memberReport"  onclick="memberReport()">Member Report</button>
		<div id="2"></div>
		<button id="topProducts"  onclick="topProducts()">Top Products Report</button>
		<div id="3"></div>
		<button id="StockOrderList" onclick="stockOrderList()">Stock Order List</button>
		<div id="4"></div>
	</div>


	<div id="copyright">
	<p id="footertop">© Copyright 2022</p>
	<p id="footerbottom">All Rights Reserved. Powered by the best team in SWE30011.</p>
</body>
<script>
	function weekSales(){
		fetch('controllers/AJAX/getWeeklySales.php').then(response => response.json())
		.then(data => {
		createTable(data, "1");

		});
	}

	function memberReport(){
		console.log("b");
	}

	function topProducts(){
		fetch('controllers/AJAX/getTopSalesProducts.php').then(response => response.json())
		.then(data => {
		createTable(data, "3");

		});
	}

	function stockOrderList(){
		console.log("d");
	}



	function createTable(json, tableId){
		var table = document.createElement("TABLE");

		//Get the count of columns.
		var columnCount = Object.keys(json[0]).length;

		//Add the header row.
		var row = table.insertRow(-1);
		for (var i = 0; i < columnCount; i++) {
			var headerCell = document.createElement("TH");
			headerCell.innerHTML = Object.keys(json[0])[i];
			row.appendChild(headerCell);
		}

		//Add the data rows.
		for (var i = 1; i < json.length; i++) {
			row = table.insertRow(-1);
			for (var j = 0; j < columnCount; j++) {
				var cell = row.insertCell(-1);
				cell.innerHTML = Object.values(json[i])[j];
			}
		}

		var dvTable = document.getElementById(tableId);
		dvTable.innerHTML = "";
		dvTable.appendChild(table);
	}
</script>
</html>