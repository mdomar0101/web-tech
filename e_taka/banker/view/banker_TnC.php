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
	<title>Upload Terms and Conditions</title>
</head>
<body>
<form method="POST" action="../controller/upload_TnC_Control.php">

<fieldset>
		<legend><h1>Upload Terms and Conditions</h1></legend>
		 Upload Notes<input type="file" id="myFile" name="filename"><br/><br/>
		 <input type="submit" name="submit" value="Submit">
		 <a href="../view/banker_Dashboard.php">Home</a>
</fieldset>

</form>
</body>
</html>
