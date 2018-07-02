<!-- login_home.php -->

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<?php
session_start();
if (isset($_SESSION['usrname']))
{
	echo "Welcome: ". $_SESSION['usrname'];

}

else
{
	header('Location: login.php');
}
?>

<a href="log_out.php"> logout </a>

</body>
</html>