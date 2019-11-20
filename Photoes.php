<?php
	if(isset($_POST['submit']))
	{
		$file_name = $_FILES['image']['name'];
		$file_temp_location = $_FILES['image']['tmp_name'];
		$file_store = "upload/".$file_name;

		move_uploaded_file($file_temp_location, $file_store);
		$text = $_POST['text'];

		$conn = mysqli_connect('localhost','root','','test');
		$sql = "INSERT INTO `post`(`name`, `image`) VALUES ('{$text}','{$file_name}')";
		if(mysqli_query($conn,$sql))
		{
			echo "File Successfully Uploaded";	
		}
		else
			echo "Uploading Proble Occure.Try Again !";

		if(isset($_POST['showdata']))
		{
			header('location:AllData.php');
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>image upload</title>
</head>
<body>
	<form method="POST" action="#" enctype="multipart/form-data"> 
		<input type="hidden" name="size" value="1000000">
		<div>
			<input type="file" name="image">
		</div>
		<div>
			<textarea name="text" cols="40" rows="4" placeholder="hi"></textarea>
		</div>
		<div>
			<input type="submit" name="submit" value="upload">
		</div>

		<div>
			<!--<input type="submit" name="showdata" value="Show All">-->
			<a href="AllData.php">Show All Data</a>
		</div>
	</form>
</body>
</html>