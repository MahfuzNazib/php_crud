<?php
	require_once('Functions.php');
	$conn = getConnection();
	$sql = "SELECT * FROM reg";
	$result = mysqli_query($conn,$sql);
	//$list = mysqli_fetch_assoc($result);
	//$result = AllUserList();
	if(isset($_POST['add_user']))
	{
		header('location:reg.php');
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
			<table border="1">
				<tr>
					<th>Name</th>
					<th>AIUB ID</th>
					<th>Email</th>
					<th>Phone</th>
				</tr>
				<?php
					while($row = mysqli_fetch_assoc($result))
					{
				?>
					<tr>
						<td><?php echo $row['Name']; ?></td>
						<td><?php echo $row['AIUB_ID']; ?></td>
						<td><?php echo $row['Email']; ?></td>
						<td><?php echo $row['Phone']; ?></td>
					</tr>
				<?php
					}
				?>

			</table>
		</center>
	</form>
</body>
</html>