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
	<title>Authenticate Account Holder</title>
</head>
<body>
<fieldset>
		<legend><h1>Authentication form for Account Holders</h1></legend>
		 <a href="../view/banker_Dashboard.php">Back</a>
</fieldset>
</body>
</html>
