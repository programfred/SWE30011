<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="keywords" content="HTML5, tags" />
  <meta name="author" content="Mir Aun Ali Naqvi"  />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link href="css.css" rel="stylesheet">
  <link href="addmember.css" rel="stylesheet">
<title>ADD MEMBER</title>
</head>

<body>

<header id="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><img id="logo" src="logo.png" alt='logo'>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
            </div>
        </div>
		<div>
            <a id="h1">ADD MEMBER</a>
			<a class="active" href="index.php" id="link">HOME</a> 	
			<a href="search.php" id="back">BACK</a>
			<a id="logout" href="/controllers/logout.php">LOG OUT</a>
        </div>
		<div class="container"><img id="joshdun" src="joshdun.png" alt='joshdun'>
    </nav>
</header>
	<div class="background">
			<div class="shape"></div>
			<div class="shape"></div>
	</div>
	<form method="post" action="/controllers/InsertMember.php" class="formfull">
				<h3>Personal Details</h3>
				<label for="First_name">First name:</label>
				<input type="text" id="First_name" name="firstname" required="required" /><br><br>
				<label for="Last_name">Last name:</label>
				<input type="text" id="Last_name" name="lastname" required="required" /><br><br>
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
				<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

				<button type="submit" class="registerbtn">Register Member</button>
	</form>
	<div id="copyright">
	<p id="footertop">© Copyright 2022</p>
	<p id="footerbottom">All Rights Reserved. Powered by the best team in SWE30011.</p>
</div>
</body>
</html>

 