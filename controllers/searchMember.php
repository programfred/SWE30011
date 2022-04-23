<?php

session_start();

if (isset($_POST['search'])){
    if (empty($_POST['search'])){
        header("Location: /index.php");
        exit();
    }
    include_once('../model/connect.php');
    $sql = "SELECT * FROM tblMember WHERE memberID = " . $_POST['search'];

    $result = $conn->query($sql);

    if ($result->num_rows == 0){
        header("Location: /index.php");
        exit();
    }

    $arrayResult = $result->fetch_array(MYSQLI_BOTH);

    $_SESSION['memberID'] = $arrayResult[0];
    $_SESSION['memFirstName'] = $arrayResult[1];
    $_SESSION['memLastName'] = $arrayResult[2];
    $_SESSION['memEmail'] = $arrayResult[3];
    $_SESSION['memMobile'] = $arrayResult[4];
    $_SESSION['memAddress'] = $arrayResult[5];
    $_SESSION['memSuburb'] = $arrayResult[6];
    $_SESSION['memPostcode'] = $arrayResult[7];

    $result->free_result();

    $conn->close();

    header("Location: /search.php");
    exit();
    
} else {
    header("Location: /login.php");
    exit();
}

?>