<?php
include_once('../model/connect.php');
session_start();
$sqlStr="select * from tblMember";
$result = $conn->query($sqlStr);
?>
<ol start="50">
    <?php

while($row = $result->fetch_assoc()) {
    echo "<li>". "memberId: " . $row["memberID"]. $row["firstName"]. " " . $row["lastName"]. $row["email"]. $row["mobile"].
    "<a href=./controllers/del.php?id=".$row["memberID"].">delete</a>".
     "</li>";
  }
    ?>
</ol>