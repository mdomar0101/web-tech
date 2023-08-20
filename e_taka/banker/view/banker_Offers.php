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
	<title>Offers or stuffs</title>
</head>
<body>
<fieldset>
		<legend><h1>Offers/Agreements</h1></legend>
		 <a href="../view/banker_Dashboard.php">Back</a>
</fieldset>
</body>
</html>
