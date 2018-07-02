<!-- otp_generation.php -->

<?php
	session_start();
	if(!isset($_SESSION['user_name']))
	{
		header('Location: user_login.php');
		exit();
	}

	else
	{
		$OTP = mt_rand(9999, 999999);
		$username = $_SESSION['user_name'];
		include('db_entry.php');

		if(!mysqli_select_db($conn, 'users'))
		{
			echo mysqli_error();
		}

		$otp_set_query = "UPDATE e_users_details SET otp = '$OTP' WHERE user_name = '$username'";

		if(!mysqli_query($conn, $otp_set_query))
		{
			echo mysqli_error();
		}


	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>change password</title>
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
	<div class="sub_container">
		<form method="post" action="otp_authentication.php">
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

		<table border="1" cellpadding="5" cellspacing="3" align="center">
			<tr>
			<td>
				<label> Old Password: </label>
			</td>
				<td>
					<input type="text" name="old_pswd" placeholder="your old password">
				</td>
			</tr>

			<td>
				<label>New Password: </label>
			</td>
				<td>
					<input type="password" name="new_pswd" placeholder="new password">
				</td>
			</tr>

			<tr>
			<td>
				<label> Retype New Password: </label>
			</td>
				<td>
					<input type="text" name="retype_pswd" placeholder="retype new password">
				</td>
			</tr>

			<td>
				<label>OTP: </label>
			</td>
				<td>
					<input type="password" name="otp" placeholder="check your mail for OTP">
				</td>
			</tr>


			<tr align="center">
				<td colspan="2">
					<input type="submit" name="login">	
				</td>
			</tr>

		</table>
		</form>	
	</div>
</div>
</body>
</html>