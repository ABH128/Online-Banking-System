<!-- admin_authentication.php -->

<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		include('db_entry.php');
		$x = md5($_POST['admin_password']);
		
		// echo $x;
		$select_query = "SELECT * FROM admins WHERE admin_name = '$_POST[admin_name]' AND password = '$x'";

		if(!mysqli_select_db($conn, 'users'))
		{
			echo mysqli_error($conn);
		}

		if(!mysqli_num_rows(mysqli_query($conn, $select_query)))
		{
			echo "<script>alert('Authentication failed. Wrong crendials...');document.location = 'admin_login.php'</script>";
		}

		else
		{
			session_start();
			$_SESSION['admin_user_name'] = $_POST['admin_name'];
			header('Location: admin_home.php');	
		}
	}

?>