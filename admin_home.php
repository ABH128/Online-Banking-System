<!-- admin_home.php -->
<?php
	session_start();	
	if (isset($_SESSION['admin_user_name'])) 
	{
		echo "Welcome: ". $_SESSION['admin_user_name'];
		echo "<hr>";
	}

	else
	{
		header('Location: admin_login.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>admin_home</title>
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

</style>
</head>
<body style="background-image: url('images/user_home.jpg')">
	<div class="main_container">
		<div class="sub_container">
			<form method="post" action="user_shifting_to_net_banking.php">
		
		<hr style="color: red">
		<button>
			<a href="new_ac_opening.php"> Open a new accoutn for a customer </a>
			
		</button>
		
		<button>
			<a href="admin_log_out.php">logout</a>
		</button>
		<br>
		<hr>
		<h3> 
			Enter the account number of the user to give him/her Internet Banking Facility
		</h3>
		<table border="1" align="center">
			<tr>
				<td>
					Account Number: 
					</td>
					<td>
						<input type="text" name="user_account_no" placeholder="enter user account number">
				</td>				
			</tr>

			<tr>
				<td>
				User Name: 
				</td>
				<td>
					<input type="text" name="user_name" placeholder="enter new user name">
			</td>
			</tr>
			<tr>
				<td>
					Default Password:
				</td>
				<td>
					<input type="Password" name="default_pswd" placeholder="default password">
				</td>
			</tr>
			<tr align="center">
				<td colspan="2">
					<input type="submit" >
				</td>
			</tr>
			
		</table>
	</form>


		</div>
	</div>
</body>
</html>