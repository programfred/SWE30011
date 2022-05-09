<?php
include_once('../model/connect.php');
session_start();
$sqlStr="select * from tblMember";
$result = $conn->query($sqlStr);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<table>
    <tr>
        <td>memberId</td>
        <td>firstName</td>
        <td>lastName</td>
        <td>email</td>
        <td>mobile</td>
    </tr>
    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo  $row["memberID"]; ?></td>
        <td><?php echo  $row["firstName"]; ?></td>
        <td><?php echo  $row["lastName"]; ?></td>
        <td><?php echo  $row["email"]; ?></td>
        <td><?php echo  $row["mobile"]; ?></td>
        <td> <a href=./delmember.php?id=".$row["memberID"].">delete</a></td>
    </tr>
    <?php   } ?>
</table>
</body>
</html>