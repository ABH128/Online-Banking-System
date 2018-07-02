<!-- user_change_password.php -->

<?php
	session_start();
	if(!isset($_SESSION['user_name']))
	{
		header("Location: user_login.php");
		exit();
	}

	else
	{
		header("Location: user_change_password_php.php");
	}

?>

