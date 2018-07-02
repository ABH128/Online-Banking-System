<!-- otp_authentication.php -->

<?
	session_start();
	if(!isset($_SESSION['user_name']))
	{
		header('Location: user_login.php');
		exit();
	}

	else
	{
		include('db_entry.php');

		$old_pswd = md5($_POST['old_pswd']);
		$new_pswd = md5($_POST['new_pswd']);
		$c_new_pswd = md5($_POST['retype_pswd']);
		$otp_by_form = $_POST['otp'];

		echo $old_pswd, $new_pswd, $c_new_pswd, $otp_by_form;

		if(mail("abhishekfromup@gmail.com","My subject","$otp_by_form", "haha"))
		{
			echo "Mail sent...";

		}
		else
		{
			echo mysqli_error($conn);
		}

		echo "string";
	}
?>