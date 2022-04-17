<?php

session_start();

if (isset($_POST['username'])){
    include_once('/model/connect.php');

    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);

    if (empty($username) || empty($password)) {

        // flag login error and return
        $_SESSION['loginError'] = 1;
        header("Location: /views/login.php");

    } else {
        // hardcoded login details
        if ($username == 'admin' && $password == 'admin'){
            
            // reset login error flag
            $_SESSION['loginError'] = 0;
            
            // create user session which defines whether the user is logged in
            $_SESSION['username'] = $username;
            exit();

        } else {

            $_SESSION['loginError'] = 1;
            header("Location: /views/login.php");
            exit();
        }
    }
} else {
    echo "bad";
    header("Location: /login.php");
    exit();
}

?>