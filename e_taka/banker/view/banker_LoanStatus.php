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
	<title>View Loan Requests</title>
</head>
<body>
<fieldset>
		<legend><h1>Loan Statements</h1></legend>
		 <a href="../view/banker_Dashboard.php">Back</a>
</fieldset>
</body>
</html>
