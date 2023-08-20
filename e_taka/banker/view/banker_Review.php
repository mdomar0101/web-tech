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
	<title>REVIEW/FEEDBACK ON e_taka</title>
</head>
<body>
<form method="POST" action="../controller/banker_reviewControl.php">
<fieldset>
		<legend><h1>REVIEW or FEEDBACK</h1></legend>
			<b>Affordibility:</b><input type="radio" name="aper" value="*" required/>*
										 <input type="radio" name="aper" value="**" />**
										 <input type="radio" name="aper" value="***" />***
										 <input type="radio" name="aper" value="****" />****
										 <input type="radio" name="aper" value="****" />*****
										 <br/></br>
         <b>Ease of access to the offers:</b><input type="radio" name="bper" value="*" required/>*
										 <input type="radio" name="bper" value="**" />**
										 <input type="radio" name="bper" value="***" />***
										 <input type="radio" name="bper" value="****" />****
										 <input type="radio" name="bper" value="****" />*****
										 <br/></br>
          <b>Online performances:</b><input type="radio" name="cper" value="*" required/>*
 										 <input type="radio" name="cper" value="**" />**
 										 <input type="radio" name="cper" value="***" />***
 										 <input type="radio" name="cper" value="****" />****
 										 <input type="radio" name="cper" value="****" />*****
 										 <br/></br>
			<b>Bankers Feedback Level: </b><input type="radio" name="dper" value="*" required/>*
										 <input type="radio" name="dper" value="**" />**
										 <input type="radio" name="dper" value="***" />***
										 <input type="radio" name="dper" value="****" />****
										 <input type="radio" name="dper" value="****" />*****<br/>
								____________________________________________________________</br>[* represents least and ***** represents best performances]</br>__________________________________</br>


			<input type="submit" name="submit" value="Submit">

			<a href="../view/banker_Dashboard.php">HOME</a>

</fieldset>
</body>
</html>
