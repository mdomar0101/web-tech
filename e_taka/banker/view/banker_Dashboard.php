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
      <title>BANKER DASHBOARD</title>
   </head>

<body><center>

      <fieldset>
         <legend align="center"><h1>All about Banker ..... Logged in as :  <?= $_COOKIE['username']?></h1></legend>
         <table>
            <tr><td colspan="12"><hr></td></tr>
            <tr>
               <td colspan="10"><a href="../view/banker_Profile.php">PROFILE</a></td>
               <td><a href="../view/banker_sb_userlist.php">Existing Users of e_taka<br></a></td>
            </tr>
            <tr><td colspan="12"><hr></td></tr>
            <tr>
               
            <td><a href="../view/banker_TnC.php">Upload Terms and Conditions</a></td>
               
               <td colspan="6"></td>
               
               <td><a href="../view/banker_Review.php">Review/feedback Window</a></td>
             <td colspan="2"></td>
               <td><a href="../view/banker_LoanStatus.php">View Loan Requests of Account Holder</a></td>
            </tr>
            <tr><td colspan="12"><hr></td></tr>
            <tr>
               <td colspan="10"><a href="../view/banker_Offers.php">Offers/Utilities</a></td>
               <td><a href="../view/banker_AuthForm.php">Create Authentication Form</a></td>
               
            </tr>
            <tr><td colspan="12"><hr></td></tr>
            <tr>
               <td><a href="../view/banker_Contact.php">Contact to other users</a></td>
            </tr>
            <tr><td colspan="12"><hr></td></tr>
            <tr>
               <td><a href="../../e_taka.html"><b>Go to Opening Page</b></a></td>
               <td></td>
               <td></td>
               <td colspan="5"></td>
               <td><a href="banker_Logout.php"><b>Log Out</b></a></td>
            </tr>
         </table>
      </fieldset>

</center></body>
</html>
