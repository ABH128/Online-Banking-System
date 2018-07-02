<!-- user_log_out.php -->

<?php
	session_start();
	session_destroy();
	header('Location: user_login.php');


?>