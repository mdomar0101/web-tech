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
	<title>Loan Request</title>
</head>
<body>
<fieldset>
		<legend><h1>Request for Loan</h1></legend>
		 <a href="../view/AH_Dashboard.php">Back</a>
</fieldset>
</body>
</html>
