<?php
	require_once('Functions.php');
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$id = $_POST['id'];
		$email = $_POST['email'];
		$number = $_POST['phone'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$status = registration($name,$id,$email,$number);
		$login = loginInfo($username,$password);

		echo "Successfully Registered in ID : ".$id;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation</title>
</head>
<body>
	<center>
		<h2><u>User Registration</u></h2><br><br>

		<form action="#" method="POST">
			<input type="text" name="name" placeholder="Enter Your Name"><br><br>
			<input type="text" name="id" placeholder="AIUB ID"><br><br>
			<input type="email" name="email" placeholder="Enter a valid Mail"><br><br>
			<input type="number" name="phone" placeholder="Enter Phone Number"><br><br>
			<input type="text" name="username" placeholder="Username"><br><br>
			<input type="password" name="password" placeholder="Password"><br><br>
			<center>
				<input type="submit" name="submit" value="Submit">
				<input type="reset" name="reset" value="Reset"><br>
				<a href="login.php">Go to Login</a>
			</center>
		</form>
	</center>
</body>
</html>