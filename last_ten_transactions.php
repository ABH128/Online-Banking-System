<!-- last_ten_transactions.php -->


<?php
	session_start();
	if(!isset($_SESSION['user_name']))
	{
		header("Location: user_login.php");
		exit();
	}

	include("db_entry.php");
	$user_table = $_SESSION['user_name']. "_transactions";
	// echo $user_table;

	// if(!if(mysqli_select_db('users')))
	mysqli_select_db($conn, 'users');
	$query = "SELECT * FROM $user_table";

	$result = mysqli_query($conn, $query);

	// $data = mysqli_fetch_assoc($result);
	
	for($i = 0; $i < mysqli_num_rows($result); $i++)
	{
		$data = mysqli_fetch_assoc($result);
		echo $data['from_or_to_account'];
		echo "----------";
		echo $data['transaction_date'];
		echo "----------";
		echo $data['description'];
		echo "----------";
		echo $data['amount'];
		echo "<br>";
		

	}

	// print_r($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>10 transaction</title>
		<style type="text/css">
		
.main_container
{
	background-color: pink;
	width: 900px;
	align-self: center;
	margin: 0 auto;
	height: 100%;

}

.sub_container
{
	background-color: #e6f2ff;
	margin-top: 20px;
	margin: 50px;
/*	background-color: red;
*/	padding: 20px;
	margin: 50px;
	width: 640px;
/*	align-self: center;
	text-align: center;
	vertical-align: center;*/
	margin: 0 auto;
	border-radius: 20px;
}
a
{
	text-decoration: none;
}

body
{
	background-image: url('images/user_login.jpg');
}

</style>
</head>
<body>
<div class="">
			<hr>

<button>
	<a href="user_home.php">Home</a>
</button>
<button>
	<a href="bal_enq_function.php"> balance Enquiery </a><br>

 </button>
<button>
	<a href="money_transfer.php">Money Transfer</a><br>

 </button>

<button> 
	<a href="user_change_password.php">change password</a><br>

 </button>

<button> 
	<a href="last_ten_transactions.php">last 10 transactions</a><br>

 </button>

<button> <a href="user_log_out.php">logout</a>
 </button>
<hr>
</div>
</body>
</html>