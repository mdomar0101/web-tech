<?php
	session_start();

	if( isset($_REQUEST['submit'])){
	$acall = $_REQUEST['acall'];
	$bcall = $_REQUEST['bcall'];


		if(empty(trim($acall)) || empty(trim($bcall)))
      {
			echo "Null submission found!";
         header("refresh:2;	url=../view/banker_Contact.php");
		}
      else
      {
         echo "Contact Request Sent to Admin";
         header("refresh:4;	url=../view/banker_Contact.php");
		}
	}
?>
