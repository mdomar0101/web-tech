<?php
	session_start();
	if(!isset($_COOKIE['username'])){
		header("location: TP_login.php");

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>OFFERED TuiTiONS</title>
<style rel="stylesheet">
body
{
	background: rgb(196,188,150);
}
#Tinsert_form h1
{
  text-align: center;
}
#Tinsert_form
{
  width: 1200px;
  margin: 20px auto;
  border: 1px solid #918274;
  border-radius: 20px;
  color: black;
  font-size: 30px;
  background: rgb(196,188,150);
}
#Tinsert_form input
{

  width: 600px;
  height: 35px;
  margin: 5px 10%;
  font-family: "Comic Sans MS", Times, serif;
  font-size: 25px;
}
#submit
{
  height: 60px;
  width: 200px;
  margin: 5px 10%;
  font-family: "IMPACT";
  font-size: 35px;
  color: white;
  background: rgb(255,0,0);
  border: none;
  border-radius: 5px;
}
a
{

  height: 60px;
  width: 100px;
  margin: 5px 10%;
  font-size: 35px;
  color: red;
  background-color: rgb(255,255,33);
  text-decoration: underline-bold;
  border-radius: 5px;

}


</style>
</head>
<body>

	<form id="Tinsert_form" action="../php/TP_Offered_tuitions.php" method="post" onsubmit="return insertCheck();">


		<center><h1>NEW TUiTiONS</h1>
		<div>
			 <input type="text" id="tname" name="tname" placeholder="TUTOR NAME" onkeypress='return onlyalphabets(event)'/>
		</div>
		<div>
			 <input type="text" id="sname" name="sname" placeholder="STUDENT NAME" onkeypress='return onlyalphabets2(event)'>
		</div>
		<div>
			<input type="text" id="standards" name="classofS" placeholder="CLASS of STUDENT">
		</div>
		<div>
			<input type="text" id="subjects" name="sub" placeholder="SUBJECTS TO STUDY">
		</div>
		<div>
			<input type="text" id="area" name="area" placeholder="AREA OF TUITION">
		</div>
		<br>
		<div>
			<button type="submit" id="submit" name="submit" onclick="insert()">I N S E R T</button>
			<a href="TP_PROViDED_TUITIONS.php">AVAILABLE_TUITIONS</a>
		</center></div>

	</form>

	<script type="text/javascript">

			/*ASCII code: 65-90>> UPPERCASE
			8>>   Backspace,
			95>>  underscore[_]*/

			function onlyalphabets(e)
			{
			var tname=e.which||e.keycode;
				if((tname>=65 && tname<=90) || (tname==95) || (tname>=97 && tname<=122) || tname==8)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
	</script>

	<script type="text/javascript">

			/*ASCII code: 65-90>> UPPERCASE
			8>>   Backspace,
			95>>  underscore[_]*/

			function onlyalphabets2(e)
			{
			var sname=e.which||e.keycode;
				if((sname>=65 && sname<=90) || (sname==95) || (sname>=97 && sname<=122) || sname==8)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
	</script>


	<script>

		function insertCheck()
		{
			var Tutorname = document.getElementById('tname').value;
			var studentName = document.getElementById('sname').value;
			var cLassofStudent = document.getElementById('standards').value;
			var subj = document.getElementById('subjects').value;
			var area = document.getElementById('area').value;

			if(Tutorname == "")
			{
				alert('PLEASE FILL THE TUTOR_NAME to proceed');
				return false;
			}
			if(studentName == "")
			{
				alert('PLEASE FILL THE studentName area to proceed');
				return false;
			}
			if(cLassofStudent == "")
			{
				alert('PLEASE FILL THE class of student to proceed');
				return false;
			}
			if(subj == "")
			{
				alert('PLEASE FILL THE SubjectofTuition to proceed');
				return false;
			}
			if(area == "")
			{
				alert('PLEASE FILL THE areaOFTuition to proceed');
				return false;
			}

			if(Tutorname.length<4)
			{
				alert('TutorName must be at least 4 characters to be valid in this field');
				return false;
			}
			if(Tutorname.length>15)
			{
				alert('TutorName must be less than 15 characters to be valid in this field');
				return false;
			}

			if(studentName.length<4)
			{
				alert('StudentName must be at least 4 characters to be valid in this field');
				return false;
			}


			else
			{
				header("location: ../views/TP_PROViDED_TUITIONS.php");
			}

		}
	</script>


</body>
</html>
