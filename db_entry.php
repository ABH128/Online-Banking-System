<!-- db_entry.php -->

<?php
	$servername = 'localhost';
	$username = 'abhishek';
	$password = 'password';

	$conn = mysqli_connect($servername, $username, $password);

	if(!$conn)
	{
		die('connection not established'). mysqli_connect_error();
	}
?>