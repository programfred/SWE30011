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
<meta name="keywords" content="HTML5, tags" />
  <meta name="author" content="Mir Aun Ali Naqvi"  />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="includes/images/favicon.ico">
  <link href="/includes/css/css.css" rel="stylesheet">
  <link href="/includes/css/reports.css" rel="stylesheet">
  <title>REPORTS</title>
<style>
	table{
    text-align: center;
    border-spacing: 15px;
    table-layout: fixed;
    height: auto;
    width: 875px;
    background-color: rgba(255,255,255,0.13);
    position: relative;
    transform: translate(-50%,-50%);
    top: 750px;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
    z-index: 902;
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
</style>

</head>
<body>
	<a id="logout" href="/controllers/logout.php">LOG OUT</a>
	<nav class="navbar navbar-expand-lg fixed-top py-3">
	<div class="container"><img id="logo" src="/includes/images/logo.png" alt='logo'>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
            </div>
        </div>
		<div>
            <a id="h1">REPORTS</a>
			<a class="active" href="index.php" id="link">HOME</a> 	
			<a href="index.php" id="back">BACK</a>
        </div>

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
	<p id="footertop">?? Copyright 2022</p>
	<p id="footerbottom">All Rights Reserved. Powered by the best team in SWE30011.</p>
</body>
<script>
	function weekSales(){
		deleteTables()
		fetch('controllers/AJAX/getWeeklySales.php').then(response => response.json())
		.then(data => {
			createTable(data, "1");
			download_table_as_csv("1");
		});
	}

	function memberReport(){
		deleteTables()
		fetch('controllers/AJAX/getWeeklyMemberSales.php').then(response => response.json())
		.then(data => {
			createTable(data, "2");
			download_table_as_csv("2");
		});
	}

	function topProducts(){
		deleteTables()
		fetch('controllers/AJAX/getTopSalesProducts.php').then(response => response.json())
		.then(data => {
			createTable(data, "3");
			download_table_as_csv("3");
		});
	}

	function stockOrderList(){
		deleteTables();
		fetch('controllers/AJAX/getStockOrderList.php').then(response => response.json())
		.then(data => {
			createTable(data, "4");
			download_table_as_csv("4");
		});
	}

	function deleteTables(){
        var t = document.querySelector("table");
        if (t){
            t.parentElement.removeChild(t);
        }
    }

	function createTable(json, tableId){
		var table = document.createElement("TABLE");
		table.setAttribute('id', 'table' + tableId)

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
		for (var i = 0; i < json.length; i++) {
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

// Quick and simple export target #table_id into a csv
function download_table_as_csv(table_id, separator = ',') {
    // Select rows from table_id
	var rows = document.getElementById("table" + table_id).rows

	console.log(rows)
    // Construct csv
    var csv = [];
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll('td, th');
        for (var j = 0; j < cols.length; j++) {
            // Clean innertext to remove multiple spaces and jumpline (break csv)
            var data = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, '').replace(/(\s\s)/gm, ' ')
            // Escape double-quote with double-double-quote (see https://stackoverflow.com/questions/17808511/properly-escape-a-double-quote-in-csv)
            data = data.replace(/"/g, '""');
            // Push escaped string
            row.push('"' + data + '"');
        }
        csv.push(row.join(separator));
    }
    var csv_string = csv.join('\n');
    // Download it
    var filename = 'export_' + table_id + '_' + new Date().toLocaleDateString() + '.csv';
    var link = document.createElement('a');
    //link.style.display = 'none';
    link.setAttribute('target', '_blank');
    link.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv_string));
    link.setAttribute('download', filename);
	link.setAttribute("id", "dwnbtn")
	link.innerHTML = "Download Report"
	var dlink = document.querySelector("table");
    dlink.appendChild(link);
}

</script>
</html>