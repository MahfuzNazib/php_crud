<?php
	
	$conn = mysqli_connect('localhost','root','','test');
	$sql = "SELECT * FROM `post`";
	$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>All Info</title>
</head>
<body>
	<form>
		<center>
			<table border="1" width="60%">
				<tr>
					<th>ID</th>
					<th>Post</th>
					<th>Image</th>
				</tr>
				<?php
					while($row = mysqli_fetch_assoc($result))
					{
				?>
				<tr>
					<td> <?=$row['id']; ?> </td>
					<td> <?=$row['name']; ?> </td>
					<td> <img src="upload/<?=$row['image']; ?>" height="100px" width="100px"> </td>
				</tr>
				<?php
					}
				?>
			</table>
			<a href="Photoes.php">Back</a>
		</center>
	</form>
</body>
</html>