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
	<title>CONTACT PAGE</title>
</head>
<body>
<form method="POST" action="../controller/AH_contactControl.php">>
</br>
</br>
</br>
<center/><table border="1" width="500px" height="300px">
 		<tr>
				<td colspan="2"><center><h2><b>CONTACT WITH OTHER USERS</b></h2></center>
		</tr>

		<tr>
			<td>
			<b>Contact with Admin: </b><input type="number" name="acall" value="">
			<input type="submit" name="submit" value="submit"></br></br>
			<b>Contact with Banker: </b><input type="number" name="bcall" value="">
			<input type="submit" name="submit" value="submit"></br></br>
			</td>
		</tr>

		<tr>
				<td colspan="2"><center><a href="AH_Dashboard.php">HOME</a></center></td>
		</tr>

	</table>
	</fieldset>
	</form>
</body>
</html>
