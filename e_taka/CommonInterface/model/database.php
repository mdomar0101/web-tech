<?php

	$host = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$database = "e_taka";

	function getConnection(){
		$con = mysqli_connect($GLOBALS['host'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['database']);
		return $con;
	}

?>
