<?php
	session_start();

	if(!isset($_COOKIE['username']))
	{
		header("location: ../../e_taka.html");
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>BANKER DP</title>
</head>

<body>
	<center>
		<img src="../../../CommonInterface/model/uploads/<?=$_SESSION['dp']?>" width="500px" height="500px"/>
		<br>
		<a href="../../view/banker_Profile.php"><h3>B  A  C  K</h3></a>
	</center>
</body>

</html>
