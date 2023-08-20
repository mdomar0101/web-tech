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
	<title>Create Own Wallet</title>
</head>
<body>
<fieldset>
		<legend><h1>CREATE CARD for Transaction</h1></legend>
		 <a href="../view/AH_Dashboard.php">Back</a>
</fieldset>
</body>
</html>
