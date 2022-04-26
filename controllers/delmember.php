<?php
include_once('../model/connect.php');
session_start();
$memberId=$_GET['id'];

if(false == empty($memberId)){
$sqlStr="delete from tblMember where memberID=" . $memberId;
$result = $conn->query($sqlStr);

}
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;