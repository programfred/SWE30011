<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="keywords" content="HTML5, tags" />
  <meta name="author" content="Mir Aun Ali Naqvi"  />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="styles/style.css" rel="stylesheet" />
<title>Enquire</title>
</head>

<body>

	<a href="/controllers/logout.php">Logout</a>
	<h1>Welcome to Goto GRO Software</h1>
	<aside>A program eases everyone's life</aside>

	<form method="post" action="/controllers/InsertMember.php">

		<section id="images">
			<fieldset>
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

			</fieldset>
			</section>
	</form>

	<div id="button">
		<a href="index.php" class="previous">Home</a>
		<!not sure if we need a back button>
		<a href="product.html" class="next">Next</a>
	</div>
</body>
</html>

 