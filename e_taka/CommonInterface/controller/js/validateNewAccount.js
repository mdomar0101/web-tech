"use strict"

   /*ASCII code: 	65-90>> UPPERCASE
   				8>>   	Backspace,
   				95>>  	underscore[_]
   				32>>	space*/


   function onlyalphabets(e)
   {
   	var fullname=e.which||e.keycode;

   	if((fullname>=65 && fullname<=90) || (fullname==95) || (fullname==32) || (fullname>=97 && fullname<=122) || (fullname==8))
   	{
   		return true;
   	}
   	else
   	{
   		return false;
   	}

   }

   function onlyalphabets2(e)
   {
   	var username=e.which||e.keycode;

   	if((username>=65 && username<=90) || (username==95) || (username>=97 && username<=122) || (username==8))
   	{
   		return true;
   	}
   	else
   	{
   		return false;
   	}

   }


function Rcheck()
{
   	var fullname=document.getElementById('fullname').value;
   	var username=document.getElementById('username').value;
   	var pass=document.getElementById('password').value;
   	var rpass=document.getElementById('confirmpassword').value;
   	var email=document.getElementById('email').value;
   	var usertype=document.getElementById('usertype').value;
   	var gender=document.getElementById('gender').value;
   	var education=document.getElementById('education').value;
   	var res =document.getElementById('nationality').value;
   	var dp =document.getElementById('dp').value;

   	if(fullname == "" )
   	{
   		alert('PLEASE TYPE YOUR FULL NAME');
   		return false;
   	}
   	if(fullname.length<6)
   	{
   		alert('Full Name must be at least 6 characters to be valid in this field');
   		return false;
   	}
   	if(fullname.length>20)
   	{
   		alert('Full Name must be less than 20 characters to be valid in this field');
   		return false;
   	}
   	if(username == "")
   	{
   		alert('PLEASE FILL THE USERNAME to proceed');
   		return false;
   	}
   	if(username.length<4)
   	{
   		alert('User Name must be at least 4 characters to be valid in this field');
   		return false;
   	}
   	if(username.length>10)
   	{
   		alert('User Name Cannot be more than 10 characters to be valid in this field');
   		return false;
   	}
   	if(pass == "")
   	{
   		alert('PLEASE FILL THE password to proceed');
   		return false;
   	}
   	if(rpass == "")
   	{
   		alert('PLEASE CONFIRM THE password to proceed');
   		return false;
   	}
   	if(pass != rpass)
   	{
   		alert('PLEASE Confirm that You entered the same password twice to proceed');
   		return false;
   	}
      if(pass.length<6)
   	{
   		alert('PASSWORD must contain at least 6 characters to be valid in this field');
   		return false;
   	}
   	if(pass.length>8)
   	{
   		alert('8 characters are STRONG enough to make PASSWORD valid in this field');
   		return false;
   	}
   	if(email == "")
   	{
   		alert('PLEASE FILL THE email to proceed');
   		return false;
   	}
   	if((email.charAt(email.length-4) != '.') && (email.charAt(email.length-3) != '.'))
   	{
   		alert('WARNING:  [[[ .com  ]]] should be given to make email valid');
   		return false;
   	}

   	if(usertype == "")
   	{
   		alert('PLEASE FILL THE USER type to proceed');
   		return false;
   	}
      if(gender == "")
   	{
   		alert('PLEASE FILL THE gender to proceed');
   		return false;
   	}
   	if(education == "")
   	{
   		alert('PLEASE FILL THE education to proceed');
   		return false;
   	}
      if(res == "")
   	{
   		alert('PLEASE select the Nationality to proceed');
   		return false;
   	}
      if(dp == "")
   	{
   		alert('PLEASE select your Profile Picture to proceed');
   		return false;
   	}
   	else
   	{
   			header("location: ../../view/LoginPage.php");
   	}

}
