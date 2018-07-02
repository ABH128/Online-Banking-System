<!-- user_home.php -->

<?php
	session_start();	
	if (isset($_SESSION['user_name'])) 
	{
		echo "Welcome: ". $_SESSION['user_name'];
	}

	else
	{
		header('Location: user_login.php');
		header('Location: otp_generation.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>home</title>
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
	width: 600px;
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
		<h1 style="color: green" align="center">
This is user home page
</h1>
<hr>
<b>
</b>
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
<img src="images/slogan.png" align="center">


	</div>
</div>
</body>
</html>