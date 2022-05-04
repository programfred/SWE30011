<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
    <link rel="icon" type="image/x-icon" href="includes/images/favicon.ico">
	<link href="includes/css/css.css" rel="stylesheet">
	<link href="includes/css/login.css" rel="stylesheet">
    <title>LOGIN</title>
</head>
<body>

<header id="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><img id="logo" src="includes/images/logo.png" alt='logo'>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
            </div>
        </div>
    </nav>
</header>
<div class="formfull">
	<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" action="controllers/authController.php">
        <h3>Login Here</h3>
		<?php if(isset($_SESSION['loginError'])){ echo "<p>Invalid username and password.</p>"; } ?>
        <label for="username">Username</label>
        <input type="text" placeholder="Username" id="username" name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <button type="submit" name="submit">Log In</button>
    </form>
</div>
<div id="copyright">
	<p id="footertop">© Copyright 2022</p>
	<p id="footerbottom">All Rights Reserved. Powered by the best team in SWE30011.</p>
</div>

<div class="guy"><img id="guy" src="guy.png" alt='guy'>

</body>
</html>