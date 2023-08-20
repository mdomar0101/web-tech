<?php
	session_start();

	if( isset($_REQUEST['submit']))
   {
   	$aper = $_REQUEST['aper'];
   	$bper = $_REQUEST['bper'];
   	$cper = $_REQUEST['cper'];
   	$dper = $_REQUEST['dper'];

		if(empty(trim($aper)) || empty(trim($bper)) || empty(trim($cper)) || empty(trim($dper)))
      {
			echo "Null submission found!";
         header("refresh:4;	url=../view/banker_Review.php");
		}
   	
      else
      {
        header("location: ../view/banker_ReviewApproval.php");
		}
	}
?>
