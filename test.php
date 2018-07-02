<!-- test.php -->

<!DOCTYPE html>
<html>
<head>
	<title>testing php</title>
</head>
<body>
<?php
		require('authentication.php');
?>
<h1>
	this my headaing of my page

</h1>
<h2>
	<?php first_fun();?>
</h2>
<h4>
Hehehe
</h4>
<h3>
	<?php second_fun();?>
</h3>

<b>
<?php
	user_details();
?>
</b>
</body>
</html>