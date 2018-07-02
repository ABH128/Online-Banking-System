<!-- money_transfer_function.php -->

<?php
	session_start();
	$uname = $_SESSION['user_name'];
	$ac_num = $_POST['ac_number'];
	$amt = $_POST['amount'];
	// echo $amt;
	// echo $ac_num;
	if (isset($_SESSION['user_name'])) 
	{
		echo "Welcome: ". $_SESSION['user_name'];
		include("db_entry.php");

		if(!mysqli_select_db($conn, 'users'))
		{
			echo mysqli_error();
		}

		$debit_user = $_SESSION['user_name']."_transactions";

		$credit_uname_retrieve = "SELECT user_name, balance, ac_number FROM e_users_details WHERE ac_number = '$ac_num'";
		$debit_bal_retrieve = "SELECT balance, ac_number FROM e_users_details WHERE user_name = '$uname'";
		
		$result1 = mysqli_query($conn, $debit_bal_retrieve);
		$data = mysqli_fetch_assoc($result1);
		// echo 
		$debit_user_available_bal = $data['balance'];
		$debit_ac_number = $data['ac_number'];
		// echo $debit_ac_number;


		// echo $debit_user;

		$result = mysqli_query($conn, $credit_uname_retrieve);

		$data = mysqli_fetch_assoc($result);

		$credit_user_name =  $data['user_name'];
		$creditor_ac_no = $data['ac_number'];


		$credit_user = $data['user_name']."_transactions";
		$credit_bal = $data['balance'];

		// echo "string: ". $credit_user;



		$debit_tbl = "CREATE TABLE IF NOT EXISTS $debit_user(from_or_to_account BIGINT NOT NULL , transaction_date DATE NOT NULL , description TEXT NOT NULL , amount INT NOT NULL )";

		$credit_tbl = "CREATE TABLE IF NOT EXISTS $credit_user(from_or_to_account BIGINT NOT NULL , transaction_date DATE NOT NULL , description TEXT NOT NULL , amount INT NOT NULL )";
		// $credit_tbl = "";

		if(!mysqli_query($conn, $debit_tbl))
		{
			mysqli_error($conn);
		}

		if(!mysqli_query($conn, $credit_tbl))
		{
			mysqli_error($conn);
		}

		if($debit_user_available_bal < $amt)
		{
			header("Location: money_transfer.php");
			exit();
		}
		else
		{
			$creditor_avail_bal = ($debit_user_available_bal - $amt); 
			$debitor_avail_bal = ($credit_bal + $amt);

			$update_creditor_bal_query = "UPDATE e_users_details SET balance = '$creditor_avail_bal' where user_name = '$uname'";
			$update_debitor_bal_query = "UPDATE e_users_details SET balance = '$debitor_avail_bal' where user_name = '$credit_user_name'";

			if(!mysqli_query($conn, $update_creditor_bal_query))
			{
				echo mysqli_error($conn);
			}

			if(!mysqli_query($conn, $update_debitor_bal_query))
			{
				echo mysqli_error($conn);
			}

			$d = date("Y-m-d");
			$creditor_transaction_desc = "INSERT INTO $credit_user VALUES ('$debit_ac_number', '$d', 'credit', '$amt')";
			if(!mysqli_query($conn, $creditor_transaction_desc))
			{
				echo mysqli_error($conn);
			}

			$debitor_transaction_desc = "INSERT INTO $debit_user VALUES ('$creditor_ac_no', '$d', 'debit', '$amt')";
			if(!mysqli_query($conn, $debitor_transaction_desc))
			{
				echo mysqli_error($conn);
			}

		}

	}

	else
	{
		header('Location: user_login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>home</title>
</head>
<body>
<br>
<a href="user_home.php">home</a>
</body>
</html>