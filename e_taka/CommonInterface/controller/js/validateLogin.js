"use strict"


function Lcheck()
{
   var name = document.getElementById('username').value;
   var pass = document.getElementById('password').value;
   var usertype = document.getElementById('usertype').value;

   if(name == "")
   {
      alert('PLEASE FILL THE USERNAME to proceed');
      return false;
   }

   if(pass == "")
   {
      alert('PLEASE FILL THE PASSWORD area to proceed');
      return false;
   }

   if(usertype == "")
   {
      alert('PLEASE CHOOSE THE USERTYPE to proceed');
      return false;
   }


   else
   {

      if (usertype == "admin")
      {
         header("location: ../../../admin/view/admin_Dashboard.php");
      }

      if (usertype == "banker")
      {
         header("location: ../../../banker/view/banker_Dashboard.php");
      }

      if (usertype == "AH")
      {
         header("location: ../../../accountHolder/view/AH_Dashboard.php");
      }

      else
      {
         header("refresh:4;	url=../view/LoginPage.php");
      }

   }

}
