<?php

	require('database.php');

	function validate($username, $password)
	{

		$con = getConnection();
		$sql = "select * from sb_userlist where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}


	function getAllUsers()
	{
		$con = getConnection();
		$sql = "select * from sb_userlist";
		$result = mysqli_query($con, $sql);
		return $result;
	}

?>
