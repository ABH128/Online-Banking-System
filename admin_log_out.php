<!-- admin_log_out.php -->

<?php
	session_start();
	session_destroy();

	header('Location: admin_login.php');

?>