<!-- admin_registration.php -->

<?php
	include('db_entry.php');

	$admin_user_name = 'rajan';
	$admin_user_password = md5('rajan');


	$query = "INSERT INTO admins VALUES ('$admin_user_name', '$admin_user_password')";

	if(!mysqli_select_db($conn, 'users'))
	{
		echo mysqli_error($conn);
	}

	if(!mysqli_query($conn, $query))
	{
		echo mysqli_error($conn);
	}
?>