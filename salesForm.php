<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="keywords" content="HTML5, tags" />
  <meta name="author" content="Mir Aun Ali Naqvi"  />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="includes/images/favicon.ico">
  <link href="includes/css/css.css" rel="stylesheet">
  <link href="includes/css/sales_form.css" rel="stylesheet">
<title>Add Sales Form</title>
</head>
<body>
<header id="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><img id="logo" src="includes/images/logo.png" alt='logo'>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
            </div>
        </div>
		<div>
            <a id="h1">Add Sales Form</a>
			<a class="active" href="index.php" id="link">HOME</a> 	
			<a href="search.php" id="back">BACK</a>
			<a id="logout" href="/controllers/logout.php">LOG OUT</a>
        </div>
		<div class="container"><img id="joshdun" src="includes/images/joshdun.png" alt='joshdun'>
    </nav>
</header>
	<div class="background">
			<div class="shape"></div>
			<div class="shape"></div>
	</div>
	<form method="post" action="/controllers/InsertMember.php" class="formfull">
				<h3>Sales Form</h3>
			
				<label for="member_id">Member_id:</label>
				<input type="text" id="member_id" name="member_id" required="required" /><br><br>
				
				<p>Kindly select the number of your desired items below:</p>
				<p>Fruits & vegies</p>
				<label for="quantity">Apple quantity:</label>
				<input type="number" id="quantity" name="quantity" min="1" max="999"><br>
				<label for="quantity">Banana quantity:</label>
				<input type="number" id="quantity" name="quantity" min="1" max="999"><br>
				<label for="quantity">Orange quantity:</label>
				<input type="number" id="quantity" name="quantity" min="1" max="999"><br>
				<label for="quantity">Papaya quantity:</label>
				<input type="number" id="quantity" name="quantity" min="1" max="999"><br>
				<label for="quantity">Grapes quantity:</label>
				<input type="number" id="quantity" name="quantity" min="1" max="999"><br><br><br>
				<p>Dairy products:</p>
				<label for="quantity">Milk quantity:</label>
				<input type="number" id="quantity" name="quantity" min="1" max="999"><br>
				<label for="quantity">Eggs quantity:</label>
				<input type="number" id="quantity" name="quantity" min="1" max="999"><br>
				<label for="quantity">Butter quantity:</label>
				<input type="number" id="quantity" name="quantity" min="1" max="999"><br>
				<br><br>
				<hr>
				<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<div id="copyright">
	<p id="footertop">© Copyright 2022</p>
	<p id="footerbottom">All Rights Reserved. Powered by the best team in SWE30011.</p>
</div>
</body>
</html>
