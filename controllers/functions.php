<?php
function checkLogin()
{
		if(isset($_SESSION['username']))
		{
            return true;
		} else {
		//redirect to login page
		header("Location: /login.php");
		die();
        }
}
?>