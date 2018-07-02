<!-- bal_enq.php -->
<?php
	session_start();	
	$uname = $_SESSION['user_name'];
	if (isset($_SESSION['user_name'])) 
	{
		echo "Welcome: ". $_SESSION['user_name'];
		include("db_entry.php");

		if(!mysqli_select_db($conn, 'users'))
		{
			echo mysqli_error();
		}

		$query = "SELECT name, ac_number, balance, ac_type FROM e_users_details WHERE user_name = '$uname'";

		$result = mysqli_query($conn, $query);

		if(!$result)
		{
			echo mysqli_error();
			exit();
		}

		else
		{
			$data = mysqli_fetch_assoc($result);

			foreach ($data as $key => $value) {
				echo $key, $value;
			}

			$_SESSION['name'] = $data['name'];
			// echo $_SESSION['name'];
			$_SESSION['acnumber'] = $data['ac_number'];
			$_SESSION['bal'] = $data['balance'];
			$_SESSION['type'] = $data['ac_type'];

			header("Location: print_ac_balance.php");
			exit();
		}
	}

	else
	{
		header('Location: user_login.php');
		
	}
?>
