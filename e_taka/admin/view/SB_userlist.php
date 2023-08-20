<?php
	session_start();
	if(!isset($_COOKIE['username']))
	{
		header("location: ../../e_taka.html");
	}

	$con = mysqli_connect('127.0.0.1', 'root', '', 'e_taka');
	$sql = "SELECT * FROM sb_userlist";
	$results = mysqli_query($con,$sql);

?>



<html>
<head>
	<title>USERS</title>
</head>
<body>
	<form>
		<br>
		<br>
		<table border=1>
			<tr>
				<td colspan="8"><center><b><h1>Existing Users</h1></b></center></td>
				
			</tr>
			<tr><center>
				<td><a href="admin_Dashboard.php">Admin Home</a></td>
				<td><a href="admin_Logout.php"> <b>LOGOUT</b></a></td><br>
				
				
			</center></tr>
			<tr><center>
				<td><center><b>FULL NAME</b></center></td>
				<td><center><b>USERNAME</b></center></td>
				<td><center><b>Password</b></center></td>
				<td><center><b>EmaiL</b></center></td>
				<td><center><b>Usertype</b></center></td>
				<td><center><b>Gender</b></center></td>
				<td><center><b>Education</b></center></td>
				<td><center><b>Nationality</b></center></td>
			</tr>

			<tr>
		<div id="result">
		<?php

			while($row = mysqli_fetch_array($results))
			{?>

				<tr>
					<td><?= $row['fullname'] ?></td>
					<td><?= $row['username'] ?></td>
					<td><?= $row['password'] ?></td>
					<td><?= $row['email'] ?></td>
					<td><?= $row['usertype'] ?></td>
					<td><?= $row['gender'] ?></td>
					<td><?= $row['education'] ?></td>
					<td><?= $row['nationality'] ?></td>
				</tr>
				
				
	<?php	}?>

			</tr>


	</table>
	</div>
	<br>
	<br>
			<br>
			<h2 id="selected_list()"><span style=color:purple>SEARCH USERS of e_taka</b></span></h2>
			

			<form >
				<input type="text" id="user_name" name="user_name" onkeyup="selected_list()">
				
				
			</form>
			<br>
	<script type="text/javascript">

		function selected_list(){
			var search = document.getElementById("user_name").value;
			var xhttp = new XMLHttpRequest();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200){
			    	document.getElementById('result').innerHTML = this.responseText;
			    }
			};

			xhttp.open("GET", "../model/ajax/SB_User_search.php?key="+search, true);
			xhttp.send();
		}
	</script>


	</form>
</body>
</html>
