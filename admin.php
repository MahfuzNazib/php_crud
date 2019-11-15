<?php
	require_once('Functions.php');
	if(isset($_POST['show_user']))
	{
		header('location:AllUserList.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body>
	<form action="#" method="POST">
		<center>
			<h1><u>Welcome to ADMIN Panel</u></h1> <br>
			<input type="submit" name="add_user" value="Add User">
			<input type="submit" name="show_user" value="User List">
			<input type="submit" name="logout" value="Logout">
			<hr>
		</center>
	</form>
</body>
</html>