<!-- print_ac_balance.php -->

<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>user details</title>
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

		<p>
<table border="1" cellpadding="3" cellspacing="5" align="center">
	<tr>
		<td>
			Name:
		</td>
		<td>
			<?php echo $_SESSION['name'];?>
		</td>
	</tr>

	<tr>
		<td>
			A/C Number:
		</td>
		<td>
			<?php echo $_SESSION['acnumber'];?>
		</td>
	</tr>

	<tr>
		<td>
			Balance:
		</td>
		<td>
			<?php echo $_SESSION['bal'];?>
		</td>
	</tr>

	<tr>
		<td>
			A/C Type:
		</td>
		<td>
			<?php echo $_SESSION['type'];?>
		</td>
	</tr>
</table>

</p>

	</div>
</div>
</body>
</html>