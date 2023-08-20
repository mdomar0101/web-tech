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
	<title>Withdraw/Deposite money</title>
</head>
<body>
<fieldset>
		<legend><h1>Transaction</h1></legend>
		 <a href="../view/AH_Dashboard.php">Back</a>
</fieldset>
</body>
</html>
