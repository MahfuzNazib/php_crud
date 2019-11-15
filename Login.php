<?php
	require_once('Functions.php');

	if(isset($_POST['submit']))
	{
		$uname = $_POST['username'];
		$pass = $_POST['password'];

		$status = UserLogin($uname,$pass);

		if($status > 0)
		{
			header('location:admin.php');	
		}
		else
		{
			echo "Invalid Username or Password! Try again";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<center>
		<form action="#" method="POST">
			<fieldset>
				<legend>Login</legend>
				<input type="text" name="username" placeholder="Enter Your Username"><br><br>
				<input type="text" name="password" placeholder="Enter Your Password"><br><br>
				<input type="submit" name="submit" value="Login">
			</fieldset>
		</form>
	</center>
</body>
</html>