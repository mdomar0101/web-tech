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
      <title>Account Holder DASHBOARD</title>
   </head>

<body><center>

      <fieldset>
         <legend align="center"><h1>  ... Welcome to Home of e_taka...  <?= $_COOKIE['username']?></h1></legend>
         <table>
            <tr><td colspan="12"><hr></td></tr>
            <tr>
               <td colspan="10"><a href="../view/AH_Profile.php">PROFILE</a></td>
               <td><a href="../view/AH_sb_userlist.php">Existing Users of e_taka<br></a></td>
            </tr>
            <tr><td colspan="12"><hr></td></tr>
            <tr>
               <td><a href="../view/AH_CreateWallet.php">Create New Transaction</a></td>
               <td></td>
               <td colspan="5"></td>
               <td><a href="../view/AH_Review.php">Review/feedback Window</a></td>
               <td colspan="2"></td>
               <td><a href="../view/AH_Contact.php">Contact with existing Users</a></td>
            </tr>
            <tr><td colspan="12"><hr></td></tr>
            <tr>
               <td colspan="10"><a href="../view/AH_transferMoney.php">Withdraw/Expenses</a></td>
               
            </tr>
            <tr><td colspan="12"><hr></td></tr>
            <tr><td colspan="12"><hr></td></tr>
            <tr>
               <td><a href="../../e_taka.html"><b>Go to Opening Page</b></a></td>
               <td></td>
               <td></td>
               <td colspan="5"></td>
               <td><a href="AH_Logout.php"><b>Log Out</b></a></td>
            </tr>
         </table>
      </fieldset>

</center></body>
</html>
