<?php
include_once('model/connect.php');
session_start();
$id=$_GET["id"];
	if(empty($_SESSION['username'])){
		header("Location: /login.php");
		exit();
	}
	if(empty($id)){
		header("Location: /index.php");
		exit();
	}
	$sql = "SELECT * FROM tblMember where  memberID=".$id;
	$result = $conn->query($sql);
	$firstInfo=null;
	while($row = $result->fetch_assoc()) {
		$firstInfo  = $row;
	  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GotoGro Member</title>
</head>
<body>

	<a href="/controllers/logout.php">Logout</a>
	<h1>Member search result</h1>

	<form method="post" action="controllers/updateMember.php">
		<fieldset>
			<h3>Personal Details</h3>
			<label for="First_name">Member Id: </label><input type="text" name="memberID" value="<?php echo $firstInfo['memberID']; ?>" readonly><br><br>

			<label for="First_name">First name: </label><input type="text" name="firstname" value="<?php echo $firstInfo['firstName']; ?>" ><br><br>

			<label for="Last_name">Last name: </label><input type="text"  name="lastname" value="<?php echo $firstInfo['lastName']; ?>"><br><br>

			<label for="Email">Email Address: </label><input type="text" name="email" value="<?php echo $firstInfo['email']; ?>" size="40"><br><br>

			<label for="Phone">Phone number: </label><input type="text" name="mobile" value="<?php echo $firstInfo['mobile']; ?>" ><br><br>

			<label for="address">Address: </label><input type="text" name="streetAddress" value="<?php echo $firstInfo['streetAddress']; ?>"><br><br>

			<label for="suburb">Suburb: </label><input type="text" name="suburb" value="<?php echo $firstInfo['suburb']; ?>"><br><br>

			<label for="post_code">Postcode: </label><input type="text" name="postcode" value="<?php echo $firstInfo['postcode']; ?>"><br><br>
			<hr>
			<button type="submit" class="registerbtn">Save</button>
		</fieldset>
	</form>


	<a href="index.php">Home</a>
	<a href="search.php">Back</a>

</body>
</html>