<?php
	session_start();

	if( isset($_REQUEST['submit'])){
	$acall = $_REQUEST['acall'];
	$bcall = $_REQUEST['bcall'];


		if(empty(trim($acall)) || empty(trim($bcall)))
      {
			echo "Null submission found!";
         header("refresh:2;	url=../view/AH_Contact.php");
		}
      else
      {
        header("location: ../view/AH_Dashboard.php");
		}
	}
?>
