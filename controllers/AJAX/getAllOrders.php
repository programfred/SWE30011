<?php
include '../../model/connect.php';

$resultAll = mysqli_query($conn, "SELECT * FROM tblOrder");

$rows = array();

if(!$resultAll){
    die(mysqli_error($conn));
}

while($r = mysqli_fetch_assoc($resultAll)) {
    $rows[] = $r;
}

header('Content-Type: application/json');

echo json_encode($rows);
