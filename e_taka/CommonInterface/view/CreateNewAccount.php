<?php
   session_start();
	// if(!isset($_COOKIE['username']))
	// {
	// 	header("location: ../../e_taka.html");
	// }
?>

<!DOCTYPE html>
<html>
<head>
   <title>New Account Page</title>
   <script src="../controller/js/validateNewAccount.js" type="text/javascript" charset="utf-8"></script>
   <link rel="stylesheet" href="../model/css/cna.css"/>
</head>

<body style="cursor:crosshair"><center>
   <form id="cna" action="../controller/NewAccountControl.php" method="post" name="cnaform" onsubmit="return Rcheck();" enctype="multipart/form-data">

      <fieldset>
         <legend align="center"><h1>Create New Account</h1></legend>
         <table>
            <tr>
               <td colspan="3" id="lin1"><a href="../view/RULES.html"><font color="blue">RULES of e_taka to create a new account</a></td>
            </tr>
            <tr><td colspan="3"><hr></td></tr>
            <tr>
               <td id="colr">FULL NAME:</td>
               <td colspan="3"><input type="text" id="fullname" name="fullname" value="" onkeypress='return onlyalphabets(event)'></td>
            </tr>
            <tr>
               <td id="colr">Username:</td>
               <td colspan="3"><input type="text" id="username" name="username" value="" onkeypress='return onlyalphabets2(event)'></td>
            </tr>
            <tr>
               <td id="colr">Create a Password:</td>
               <td colspan="3"><input type="password" id="password" name="password" value=""></td>
            </tr>
            <tr>
               <td id="colr">Retype new Password:</td>
               <td colspan="3"><input type="password" id="confirmpassword" name="confirmpassword" value=""></td>
            </tr>
            <tr>
               <td id="colr">Email Address:</td>
               <td colspan="3"><input type="email" id="email" name="email" value=""></td>
            </tr>
            <tr>
               <td><br></td>
            </tr>
            <tr>
               <td id="colr">User Type:</td>
               <td colspan="3" id="usertype">
                  Admin                   <input type="radio" name="usertype" value="admin">
                  Banker                  <input type="radio" name="usertype" value="banker">
                  Account Holder    <input type="radio" name="usertype" value="AH">
               </td>
            </tr>
            <tr>
               <td id="colr">Gender:</td>
               <td colspan="3" id="gender">
                  MaLe<input type="radio" name="gender" value="male">
                  FeMaLe<input type="radio" name="gender" value="female">
               </td>
            </tr>
            <tr>
               <td id="colr">Education:</td>
               <td colspan="3" id="education">
                  SSC                                        <input type="checkbox" name="education" value="SSC">
                  HSC                                        <input type="checkbox" name="education" value="HSC">
                  BSC                                        <input type="checkbox" name="education" value="BSC">
                  MSC/Other Higher Studies   <input type="checkbox" name="education" value="others">
               </td>
            </tr>
            <tr>
               <td id="colr">Nationality:</td>
               <td colspan="3" id="nationality">
                  <select name="countries">
                     <option value="---">Countries</option>
                     <option value="bd">BANGLADESH</option>
                     <option value="us">UNITED STATES</option>
                     <option value="uk">UNITED KINGDOM</option>
                     <option value="aus">AUSTRALIA</option>
                     <option value="ger">GERMANY</option>
                     <option value="canada">CANADA</option>
                     <option value="others">Any other Nation</option>
                  </select>
               </td>
            </tr>
            <tr>
               <td><br></td>
            </tr>
            <tr>
               <td id="colr">Upload Profile Picture:   </td>
               <td><input type="file" id="dp" name="dp"></td>
            </tr>
            <tr><td colspan="3"><hr></td></tr>
            <tr>
               <td id="lin1"><a href="../../e_taka.html">Go to Opening Page</a></td>
               <td><center><input type="submit" id="submit" name="submit" onclick="Rcheck()" value="Create"></center></td>
            </tr>
         </table>
      </fieldset>

   </form>
</center></body>
</html>
