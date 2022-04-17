<?php

include_once('settings.php');

//Connect To Database

try {
    $conn = new mysqli($hostname, $username, $password, $dbname);
} catch (Exception $e){
    die("failed to connect to DB: " . $conn->connect_error);
}


?>