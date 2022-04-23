<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GotoGro-Login</title>
</head>
<body>

	<style type="text/css">
		#text{

			height: 25px;
			border-radius: 50px;
			padding: 4px;
			border: solid thin #aaa;
		}

		#button{
			padding: 10px;
			width: 100px;
			color: black;
			background-color: hotpink;
			border: black;
		}

		#box{
			background-color: lightblue;
			margin: auto;
			width: 300px;
			padding: 30px;
			border-radius: 10px;
		}
	</style>

	<div id="box">
		
		<form method="post" action="/controllers/authController.php">
			<div style="font-size: 20px;margin: 10px;color: black;">Login</div>
			<?php if(isset($_SESSION['loginError'])){ echo "<p>Invalid username and password.</p>"; } ?>
			<input id="text" type="text" name="username"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<button id="button" type="submit" name="submit">Login</button><br><br>
		</form>
	</div>
</body>
</html>