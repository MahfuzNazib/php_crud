<?php
	require_once('DB.php');

	//For Insert User Information
	function registration($name,$id,$email,$phone)
	{
		$conn = getConnection();
		$sql = "INSERT INTO reg VALUES('{$name}','{$id}','{$email}',$phone)";
		if(mysqli_query($conn,$sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	//For Insert Login Information

	function loginInfo($username,$password)
	{
		$conn = getConnection();
		$sql = "INSERT into logininfo VALUES('{$username}','{$password}',0)";
		if(mysqli_query($conn,$sql))
		{
			return true;
		}
		else
			return false;
	}

	function UserLogin($username,$password)
	{
		$conn = getConnection();
		$sql = "SELECT * FROM `logininfo` WHERE Username='{$username}' and Password='{$password}'";
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}

	function AllUserList()
	{
		$conn = getConnection();
		$sql = "SELECT * FROM reg";
		$result = mysqli_query($conn,$sql);
		$list = mysqli_fetch_assoc($result);
		return $list;
	}

?>