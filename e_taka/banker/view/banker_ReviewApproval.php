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
	<title></title>
</head>
<body>
Review successfully posted to Admin of e_taka....</br>
<a href="banker_Review.php">Back</a></br>
<a href="banker_Dashboard.php">HOME</a></br>

</body>
</html>
