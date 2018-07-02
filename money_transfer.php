<!-- money_transfer.php -->

<?php
	session_start();
	$uname = $_SESSION['user_name'];
	if (!isset($_SESSION['user_name'])) 
	{
		header('Location: user_login.php');

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>transfer</title>
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
<div class="main_container">
	<div class="sub_container" align="center">
		<form method="post" action="money_transfer_function.php">
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

<h3 style="color: green">Enter the A/C number and Amount to be transfered to the Benificiary</h3>
	
	
	<table border="1" cellspacing="3" cellpadding="3">
		<tr align="right">
			<td>
				A/C Number: 
			</td>
			<td>
				<input type="text" name="ac_number" placeholder="A/C Number">
			</td>
		<tr>
			<td>
				Amount: 			
			<td>
				<input type="text" name="amount" placeholder="Amount to be transfered">
			</td>
		</tr>
		<tr>
		<td colspan="2" align="center">
		<input type="submit" name="submit">
		</tr>
			</td>
		
			
	</table>

</form>
	</div>
</div>
</body>
</html>