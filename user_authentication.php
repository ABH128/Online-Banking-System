<!-- user_authentication.php -->

<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		include('db_entry.php');

		$username = $_POST['usrnme'];
		$password = md5($_POST['pswd']);

		 // echo $username, $password;

		$select_query = "SELECT * FROM e_users_details WHERE user_name = '$username' AND password = '$password'";

		if(!mysqli_select_db($conn, 'users'))
		{
			echo mysqli_error($conn);
			// echo "string";
		}

		if(!mysqli_num_rows(mysqli_query($conn, $select_query)))
		{
			echo "<script>alert('Authentication failed. Wrong crendials...');document.location = 'user_login.php'</script>";
		}
		
		else
		{
			session_start();
			$_SESSION['user_name'] = $username;
			header("Location: user_home.php");
		}

	}




?>