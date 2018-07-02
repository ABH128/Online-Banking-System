<!-- new_ac_opening.php -->

<!DOCTYPE html>
<html>
<head>
	<title>new account opening</title>
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
	background-image: url('images/user_home.jpg');
}
</style>

</head>
<body>
<div class="main_container">
	<div class="sub_container">
		<form method="post" action="register_new_user.php">
<div align="center">	
<button>
	<a href="admin_home.php"> Provide NET BANKING to a customer </a>
</button>
<hr> 
	<h3 style="color: red"> Enter the user details </h3>
	<table border="1" align="center">
		<tr>
			<td>
				Account Number: 
			</td>
			<td>
				<input type="text" name="ac_num">
			</td>
		</tr>
		<tr>
			<td>
				Account Holder Name: 
			</td>
			<td>
				<input type="text" name="ac_name">
			</td>
		</tr>
		<tr>
			<td>
				Mobile: 
			</td>
			<td>
				<input type="text" name="mobile">
			</td>
		</tr>
		<tr>
			<td>
				E-mail: 
			</td>
			<td>
				<input type="text" name="email">
			</td>
		</tr>
		<tr>
			<td>
				Balance: 
			</td>
			<td>
				<input type="text" name="balance">
			</td>
		</tr>
		<tr>
			<td>
				Account Type: 
			</td>
			<td>
				<input type="text" name="ac_type">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="submit_user_details" value = "Submit Details">
			</td>
			
		</tr>
	</table>
</div>

	

</form>
	</div>
</div>
</body>
</html>