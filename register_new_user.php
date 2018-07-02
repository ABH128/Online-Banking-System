<!-- register_new_user.php -->

<?php
	include('db_entry.php');

	$num =  $_POST['ac_num'];
	$name =  $_POST['ac_name'];
	$mobile =  $_POST['mobile'];
	$email =  $_POST['email'];
	$balance =  $_POST['balance'];
	$type =  $_POST['ac_type'];

	// echo $num, $name, $mobile, $email, $balance, $type;

	if(!mysqli_select_db($conn, 'users'))
	{
		echo mysqli_error($conn);
	}

	$insertion_query = "INSERT INTO user_details VALUES ('$num', '$name' ,$mobile, '$email', '$balance', '$type')";

	if(!mysqli_query($conn, $insertion_query))
	{
		echo mysqli_error($conn);
	}

	else
	{
		echo "<script>alert('New A/C opened...');document.location = 'admin_home.php'</script>";
		// header("Location: admin_home.php");
	}
?>