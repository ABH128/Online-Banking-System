<!-- user_shifting_to_net_banking.php -->

<?php
	include('db_entry.php');

	if(!mysqli_select_db($conn, 'users'))
	{
		echo mysqli_error();
	}

	$ac_no = $_POST['user_account_no'];
	$user_name = $_POST['user_name'];
	$pswd = md5($_POST['default_pswd']);

	// echo $ac_no, $user_name, $pswd;

	$query = "SELECT * FROM user_details WHERE ac_number = '$ac_no'";

	// if(mysqli_query)

	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result) == 0)
	{
		echo mysqli_num_rows($result);
		echo "<script>alert('User not found in our database...');document.location = 'admin_home.php'</script>";
		exit();
	}

	$user_data = array();

	$data = mysqli_fetch_assoc($result);

	foreach($data as $key => $value) 
	{
		global $user_data;
		$user_data[] = $value;
		
	}

	// foreach ($user_data as $key2 => $value2) {
	// 	echo $key2 ." => ". $value2. "<br><br>";
	// }

	$tbl_creation = "CREATE TABLE IF NOT EXISTS e_users_details(user_name VARCHAR(10) NOT NULL , password VARCHAR(32) NOT NULL, session INT(1) NOT NULL , otp INT(8) NOT NULL , ac_number BIGINT(14) NOT NULL , name TEXT(10) NOT NULL , mobile BIGINT(15) NOT NULL , email VARCHAR(30) NOT NULL , balance DOUBLE NOT NULL , ac_type TEXT(10) NOT NULL , PRIMARY KEY (ac_number), UNIQUE (user_name))";

	if(!mysqli_query($conn, $tbl_creation))
	{
		echo mysqli_error($conn);
	}

	$user_data_transfer = "INSERT INTO e_users_details VALUES('$user_name', '$pswd', 0, 0000, '$user_data[0]', '$user_data[1]', '$user_data[2]', '$user_data[3]', '$user_data[4]', '$user_data[5]')";

	if(!mysqli_query($conn, $user_data_transfer))
	{
		echo mysqli_error($conn);
	}

	else
	{
		$row_removal_query = "DELETE FROM user_details WHERE ac_number = '$ac_no'";

		if(!mysqli_query($conn, $row_removal_query))
		{
			echo mysqli_error($conn);
		}
		echo "<script>alert('REGISTERED for NET BANKING...');document.location = 'admin_home.php'</script>";
		// header("Location: admin_home.php");
	}

?>