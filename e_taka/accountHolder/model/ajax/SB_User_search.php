<?php

	//include('../service/function.php');

	$search = $_GET['key'];

	$con = $con = mysqli_connect('127.0.0.1', 'root', '', 'e_taka');
	$sql = "select * from sb_userlist where username like '%{$search}%'";
	$result = mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);


	if($count)
   {
		$data = "<table border='5' BORDERCOLOR=yellow>
									<tr>
										<td><span style='color:red '><b>FULL NAME</b></span></td>
										<td><span style='color:red '><b>USERNAME</b></span></td>
										<td><span style='color:red '><b>PASSWORD</b></span></td>
										<td><span style='color:red '><b>Email Address</b></span></td>
										<td><span style='color:red '><b>UserType</b></span></td>
										<td><span style='color:red '><b>GENDER</b></span></td>
										<td><span style='color:red '><b>Education</b></span></td>
										<td><span style='color:red '><b>Nationality</b></span></td>
										</tr>
									";

		while($row = mysqli_fetch_assoc($result))
      {
			$data .= "<tr>
					<td><span style='color:blue '>{$row['fullname']}</span></td>
					<td><span style='color:blue '>{$row['username']}</span></td>
					<td><span style='color:blue '>{$row['password']}</span></td>
					<td><span style='color:blue '>{$row['email']}</span></td>
					<td><span style='color:blue '>{$row['usertype']}</span></td>
					<td><span style='color:blue '>{$row['gender']}</span></td>
					<td><span style='color:blue '>{$row['education']}</span></td>
					<td><span style='color:blue '>{$row['nationality']}</span></td>
			</tr>";
		}

		$data .= "</table>";
		echo $data;
	}
   else
   {
		echo "<span style=color:red><b>No result found!!!!!</b></span>";
	}
?>
