<?php

session_start();

if (isset($_POST['submit'])){
    include_once('../model/connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {

        // flag login error and return
        $_SESSION['loginError'] = 1;
        header("Location: /login.php");

    } else {
        // hardcoded login details
        if ($username == 'admin' && $password == 'admin'){
            
            // reset login error flag
            unset($_SESSION['loginError']);
            
            // create user session which defines whether the user is logged in
            $_SESSION['username'] = $username;
            header("Location: /index.php");
            exit();

        } else {

            $_SESSION['loginError'] = 1;
            header("Location: /login.php");
            exit();
        }
    }
} else {
    header("Location: /login.php");
    exit();
}

?>