<!-- user_change_password_php.php -->

<?php
	session_start();
	if(!isset($_SESSION['user_name']))
	{
		header('Location: user_login.php');
		exit();
	}

	else
	{
		header('Location:otp_generation.php');
	}



?>