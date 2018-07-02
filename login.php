<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<link rel="stylesheet" href="CSS/css_file.css">
</head>
<body class="main_container">
	<form method="post" action="authentication.php">
		<div class="sub_container">
		<div style="text-align: center;">
		 
		<div style="color: green">
				Click <a href="#"> HERE </a> to register for online banking.

		</div>
			<p>
				Username: <input type="text" name="usrnme" placeholder="type username here..."> 
				<span class="required">*</span>
			</p>
			<p>
				Password: <input type="password" name="pswd" placeholder="type password here..."> 
				<span class="required">*</span>
			</p>
			<div>
				<input type="submit" name="name" value="login" name = 'login'>
			</div>
			<div>
				<a target="blank" href="forgot_password.php"> forgot password </a> 
			</div>
			</div>
		</div>



	</form>
</body>
</html>