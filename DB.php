<?php
	function getConnection()
	{
		$conn = mysqli_connect('localhost','root','','dbtest');
		return $conn;
	}
?>