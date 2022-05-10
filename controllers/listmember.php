<?php
include_once('../model/connect.php');
session_start();
$sqlStr="select * from tblMember";
$result = $conn->query($sqlStr);
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" >
  <meta name="keywords" content="HTML5, tags" />
  <meta name="author" content="Mir Aun Ali Naqvi"  />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="includes/images/favicon.ico">
  <link href="/includes/css/css.css" rel="stylesheet">
  <link href="/includes/css/listmember.css" rel="stylesheet">
  <title>LIST MEMBER</title>
</head>
<body>
<header id="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><img id="logo" src="/includes/images/logo.png" alt='logo'>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
            </div>
        </div>
		<div>
            <a id="h1">LIST MEMBERS</a>
			<a class="active" href="/index.php" id="link">HOME</a> 	
			<a id="logout" href="/controllers/logout.php">LOG OUT</a>
        </div>
    </nav>
</header>
	<div class="background">
			<div class="shape"></div>
			<div class="shape"></div>
    </div>
    <form>
        <table>
            <tr>
                <td id="names">Member ID</td>
                <td id="names">Nirst Name</td>
                <td id="names">Last Name</td>
                <td id="names">Email</td>
                <td id="names">Mobile</td>
            </tr>
            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td id="names"><?php echo  $row["memberID"]; ?></td>
                <td id="names"><?php echo  $row["firstName"]; ?></td>
                <td id="names"><?php echo  $row["lastName"]; ?></td>
                <td id="names"><?php echo  $row["email"]; ?></td>
                <td id="names"><?php echo  $row["mobile"]; ?></td>
                <td> <a id="button" href=./delmember.php?id="<?php echo $row["memberID"] ?>">DELETE</a></td>
            </tr>
            <?php   } ?>
        </table>
    </form>
	<div id="copyright">
	<p id="footertop">© Copyright 2022</p>
	<p id="footerbottom">All Rights Reserved. Powered by the best team in SWE30011.</p>
</body>
</html>