<?php
	session_start();

	if( isset($_REQUEST['submit']))
   {
		$filename = $_REQUEST['filename'];


		if(empty(trim($filename)))
      {
			echo "Null submission found!";
         header("refresh:3;	url=../view/banker_TnC.php");
		}
      else
      {
        echo "Successfully Uploaded!";
        header("refresh:4;	url=../view/banker_TnC.php");

		}
	}
?>
