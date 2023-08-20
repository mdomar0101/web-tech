<?php
	session_start();
	//
	// if(!isset($_COOKIE['username']))
	// {
	// 	header("location: e_taka.php");
	// }
?>

<!DOCTYPE html>
<html>

   <head>
      <title>Login Page</title>
		<script src="../controller/js/validateLogin.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="../model/css/login.css"/>
   </head>

<body><center>
   <form id="LOGIN_form" action="../controller/LoginControl.php" method="post" onsubmit="return Lcheck();">

      <fieldset>
         <legend align="center"><h1>LOGIN TO THE e_taka</h1></legend>
         <table>
            <tr><td colspan="3"><hr></td></tr>
            <tr>
               <td id="text">Username:</td>
               <td colspan="3"><input type="text" id="username" name="username" value=""></td>
            </tr>
            <tr>
               <td id="text">Password:</td>
               <td colspan="3"><input type="password" id="password" name="password" value=""></td>
            </tr>
            <tr>
               <td id="text">User Type:</td>
               <td colspan="3" id="usertype">
                  Admin<input type="radio" name="usertype" value="admin" required/>
                  Banker<input type="radio" name="usertype" value="banker">
                  Account Holder<input type="radio" name="usertype" value="AH">
               </td>
            </tr>
            <tr><td colspan="3"><hr></td></tr>
            <tr>
               <td id="lin1"><a href="../../e_taka.html">Go to Opening Page</a></td>
               <td><center><input type="submit" id="submit" name="submit" value="LOGIN" onclick="Lcheck()"></center></td>
               <!-- <td><a href="../../CommonInterface/LoginPage.html">BACK</a></td> -->
            </tr>
         </table>
      </fieldset>

   </form>
</center></body>
</html>
