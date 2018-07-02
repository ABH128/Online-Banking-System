<!-- authentication.php -->

<?php

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		include('db_entry.php');
		check();
	}

	else
	
	{		
		echo "Data not received...";
	}


	function check()
	{
		global $conn;

		if (!mysqli_select_db($conn, 'users'))
		{
			echo "<br> Database not selected". mysqli_error($conn);
		}	
		$x = $_POST['usrnme'];
		$select_query = "SELECT * FROM user_details WHERE user_name = '$_POST[usrnme]'";
		$result = mysqli_query($conn, $select_query);

		if ($select_query) 
		{
			if (mysqli_num_rows($result) > 0 ) 
			{
				$data = mysqli_fetch_assoc($result);

				foreach ($data as $key => $value) 
				{
					echo $key ." => ". $value ."<br>" ;
				}

				session_start();
				$_SESSION['usrname'] = $_POST['usrnme'];
				header('Location: home.php');
			}

			else
			{
				echo "Not registered...";
			}

			
			
		}
		

	}
?>