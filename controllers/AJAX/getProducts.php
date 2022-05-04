<?php
include '../../model/connect.php';

$sql = mysqli_query($conn, "SELECT * FROM tblProduct");

$rows = array();

while($r = mysqli_fetch_assoc($sql)) {
    $rows[] = $r;
}

header('Content-Type: application/json');

echo json_encode($rows);

?>