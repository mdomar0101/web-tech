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
      <title>ADMIN DASHBOARD</title>
   </head>

<body><center>

      <fieldset>
         <legend align="center"><h1>Hey <?= $_COOKIE['username']?> ... Welcome to Admin Home!</h1></legend>
         <table>
            <tr><td colspan="12"><hr></td></tr>
            <tr>
               <td colspan="10"><a href="../view/admin_Profile.php">PROFILE</a></td>
               <td><a href="../view/SB_userlist.php">Existing Users of e_taka<br></a></td>
            </tr>
            <tr><td colspan="12"><hr></td></tr>
            <tr>
               <td><a href="../view/admin_Transaction.php">Transaction Process</a></td>
               <td colspan="6"></td>
               <td><a href="../../e_taka.html">Loan Zone</a></td>
               <td colspan="2"></td>
               <td><a href="../../e_taka.html">Transaction Statements/Records</a></td>
            </tr>
            <tr><td colspan="12"><hr></td></tr>
            <tr>
               <td colspan="10"><a href="../../e_taka.html">Offers/Utilities</a></td>
               <td><a href="../../e_taka.html">Review/feedback Window</a></td>
            </tr>
            <tr><td colspan="12"><hr></td></tr>
            <tr>
               <td><a href="../../e_taka.html">Contact to other Bank Personnels</a></td>
               <td colspan="9"></td>
               <td><a href="../../e_taka.html">Contact to Existing Users</a></td>
            </tr>
            <tr><td colspan="12"><hr></td></tr>
            <tr>
               <td><a href="../../e_taka.html"><b>Go to Opening Page</b></a></td>
               <td></td>
               <td></td>
               <td colspan="5"></td>
               <td><a href="admin_Logout.php"><b>Log Out</b></a></td>
            </tr>
         </table>
      </fieldset>

</center></body>
</html>
