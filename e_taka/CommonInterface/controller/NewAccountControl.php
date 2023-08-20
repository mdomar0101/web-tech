<?php
   session_start();
   require('../model/db_Functions.php');

   if(isset($_POST['submit']) && !empty($_FILES["dp"]["name"]))
	{
      $con = mysqli_connect('127.0.0.1', 'root', '', 'e_taka');

      if (!$con)
      {
         echo "<center><h2><font color = red>!! ~ Connection to Database is Denied ~ !!";
   		header("refresh:3;	url=../view/CreateNewAccount.php");
      }
      else
      {
   		$filename = $_FILES['dp']['name'];
   		$src = $_FILES['dp']['tmp_name'];
   		$des = '../model/uploads/'.$filename;
   		$file_extension = (pathinfo($des,PATHINFO_EXTENSION));
   		$file_size = $_FILES['dp']['size'];

         $usertype = $_POST['usertype'];
         $gender = $_POST['gender'];
         $education = $_POST['education'];


   		if($file_extension != "jpg" && $file_extension != "png" && $file_extension != "jpeg" && $file_extension != "JPG" && $file_extension != "PNG" && $file_extension != "JPEG")
   		{
   			echo "<center><h3>Sorry, only JPG, JPEG, and PNG extension_loaded images are allowed";
   			header("refresh:4;	url=../view/CreateNewAccount.php");
   		}
   		elseif (file_exists($des))
   		{
   			echo "<center><h3>Sorry, file already exists in the directory";
   			header("refresh:4;	url=../view/CreateNewAccount.php");
   		}
   		elseif ($file_size > 4000000)
   		{
   			echo "<center><h3>Sorry, your file is too large than expected [4mb is the limit]";
   			header("refresh:4;	url=../view/CreateNewAccount.php");
   		}
   		else
   		{
            $fullname = $_POST['fullname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $c_password = $_POST['confirmpassword'];
            $email = $_POST['email'];

            $countries = $_POST['countries'];

            if($fullname != "" && $username != "" && $password != "" && $c_password != "" && $email != "" && $_POST['education'] != "" && $countries != "")
            {
               $special_characters = preg_match('@[^\w]@', $password);

               if(!preg_match ("/^[a-zA-z]*$/", $fullname) && !preg_match ("/^[a-zA-z]*$/", $username))
               {
                  echo "<center><h2><font color = red>Fullname and Username can only contain alphabets and whitespaces";
                  header("refresh:6;	url=../view/CreateNewAccount.php");
               }
               elseif(strlen($fullname) < '6' && strlen($username) < '4')
               {
                  echo "<center><h2><font color = red>Fullname must be of at least 6 characters and username of at least 4 characters";
                  header("refresh:6;	url=../view/CreateNewAccount.php");
               }
               elseif(strlen($password) < '6')
               {
                  echo "<center><h2><font color = red>PASSWORD must be of at least 6 characters";
                  header("refresh:3;	url=../view/CreateNewAccount.php");
               }
               else if(!$special_characters)
               {
                  echo "<center><h2><font color = red>PASSWORD must contain at least 1 special character/symbol";
                  header("refresh:3;	url=../view/CreateNewAccount.php");
               }
               else if($c_password != $password)
               {
                  echo "<center><h2><font color=red>Oopss...!! New Password is not confirmed yet... New Password must match with the Retyped Password ## Please do fix it";
                  header("refresh:6;	url=../view/CreateNewAccount.php");
               }
               else
               {

                  if($usertype == "admin" && $gender == "male")
                  {
                     $file_name = $_FILES['dp']['name'];
                     $name = $_POST['username'];

                     $json = array(
                        "fullname" => $fullname,
                        "user_name" => $name,
                        "password" => $password,
                        "email" => $email,
                        "usertype" => $usertype,
                        "gender" => $gender,
                        "education" => $education,
                        "Nationality" => $countries,
                        "ProfilePicture" => $file_name,
                     );

                     if(filesize("../model/SB_Users.json") == 0)
                     {
                        $first_data = array($json);
                        $data_to_save = $first_data;
                     }
                     else
                     {
                        $old_data = json_decode(file_get_contents("../model/SB_Users.json"));
                        array_push($old_data, $json);
                        $data_to_save = $old_data;
                     }

                     if (!file_put_contents("../model/SB_Users.json", json_encode($data_to_save, JSON_PRETTY_PRINT), LOCK_EX))
                     {
                        echo "<center><h1><font color=red>error in STORING JSON file";
                        header("refresh:3;	url=../view/CreateNewAccount.php");
                     }
                     else
                     {
                        if(move_uploaded_file($src, $des))
               			{
                           $_SESSION['dp'] = $_FILES['dp']['name'];

                           $sql = "INSERT INTO `sb_userlist` (`fullname`,`username`,`password`,`email`,`usertype`,`gender`,`education`,`nationality`,`dp`) VALUES ('$fullname','$username','$password','$email','$usertype','$gender','$education','$countries','$des')";

                  			if(mysqli_query($con, $sql))
                  			{
                           setcookie('username', $username, time()+3600, '/');
                           echo "<center><h1><font color=green>Redirecting to Login with the created account";
                           header("refresh:2;	url=../view/LoginPage.php");
                  			}
                  			else
                  			{
                  				echo "!! ERROR to store in database !!";
                  				header("refresh:3;	url=../view/CreateNewAccount.php");
                  			}

               			}
               			else
               			{
               				echo "<center><h2><font color = red>Error in Photo Upload.....";
                           header("refresh:3;	url=../view/CreateNewAccount.php");
               			}
                     }
                  }
                  elseif($usertype == "admin" && $gender == "female")
                  {
                     $file_name = $_FILES['dp']['name'];
                     $name = $_POST['username'];

                     $json = array(
                        "fullname" => $fullname,
                        "user_name" => $name,
                        "password" => $password,
                        "email" => $email,
                        "usertype" => $usertype,
                        "gender" => $gender,
                        "education" => $education,
                        "Nationality" => $countries,
                        "ProfilePicture" => $file_name,
                     );

                     if(filesize("../model/SB_Users.json") == 0)
                     {
                        $first_data = array($json);
                        $data_to_save = $first_data;
                     }
                     else
                     {
                        $old_data = json_decode(file_get_contents("../model/SB_Users.json"));
                        array_push($old_data, $json);
                        $data_to_save = $old_data;
                     }

                     if (!file_put_contents("../model/SB_Users.json", json_encode($data_to_save, JSON_PRETTY_PRINT), LOCK_EX))
                     {
                        echo "<center><h1><font color=red>error in STORING JSON file";
                        header("refresh:3;	url=../view/CreateNewAccount.php");
                     }
                     else
                     {
                        if(move_uploaded_file($src, $des))
               			{
                           $_SESSION['dp'] = $_FILES['dp']['name'];

                           $sql = "INSERT INTO `sb_userlist` (`fullname`,`username`,`password`,`email`,`usertype`,`gender`,`education`,`nationality`,`dp`) VALUES ('$fullname','$username','$password','$email','$usertype','$gender','$education','$countries','$des')";

                  			if(mysqli_query($con, $sql))
                  			{
                           setcookie('username', $username, time()+3600, '/');
                           echo "<center><h1><font color=green>Redirecting to Login with the created account";
                           header("refresh:2;	url=../view/LoginPage.php");
                  			}
                  			else
                  			{
                  				echo "!! ERROR to store in database !!";
                  				header("refresh:3;	url=../view/CreateNewAccount.php");
                  			}
               			}
               			else
               			{
               				echo "<center><h2><font color = red>Error in Photo Upload.....";
                           header("refresh:3;	url=../view/CreateNewAccount.php");
               			}
                     }
                  }
                  elseif($usertype == "banker" && $gender == "male")
                  {
                     $file_name = $_FILES['dp']['name'];
                     $name = $_POST['username'];

                     $json = array(
                        "fullname" => $fullname,
                        "user_name" => $name,
                        "password" => $password,
                        "email" => $email,
                        "usertype" => $usertype,
                        "gender" => $gender,
                        "education" => $education,
                        "Nationality" => $countries,
                        "ProfilePicture" => $file_name,
                     );

                     if(filesize("../model/SB_Users.json") == 0)
                     {
                        $first_data = array($json);
                        $data_to_save = $first_data;
                     }
                     else
                     {
                        $old_data = json_decode(file_get_contents("../model/SB_Users.json"));
                        array_push($old_data, $json);
                        $data_to_save = $old_data;
                     }

                     if (!file_put_contents("../model/SB_Users.json", json_encode($data_to_save, JSON_PRETTY_PRINT), LOCK_EX))
                     {
                        echo "<center><h1><font color=red>error in STORING JSON file";
                        header("refresh:3;	url=../view/CreateNewAccount.php");
                     }
                     else
                     {
                        if(move_uploaded_file($src, $des))
               			{
                           $_SESSION['dp'] = $_FILES['dp']['name'];

                           $sql = "INSERT INTO `sb_userlist` (`fullname`,`username`,`password`,`email`,`usertype`,`gender`,`education`,`nationality`,`dp`) VALUES ('$fullname','$username','$password','$email','$usertype','$gender','$education','$countries','$des')";

                  			if(mysqli_query($con, $sql))
                  			{
                           setcookie('username', $username, time()+3600, '/');
                           echo "<center><h1><font color=green>Redirecting to Login with the created account";
                           header("refresh:2;	url=../view/LoginPage.php");
                  			}
                  			else
                  			{
                  				echo "!! ERROR to store in database !!";
                  				header("refresh:3;	url=../view/CreateNewAccount.php");
                  			}
               			}
               			else
               			{
               				echo "<center><h2><font color = red>Error in Photo Upload.....";
                           header("refresh:3;	url=../view/CreateNewAccount.php");
               			}
                     }
                  }
                  elseif($usertype == "banker" && $gender == "female")
                  {
                     $file_name = $_FILES['dp']['name'];
                     $name = $_POST['username'];

                     $json = array(
                        "fullname" => $fullname,
                        "user_name" => $name,
                        "password" => $password,
                        "email" => $email,
                        "usertype" => $usertype,
                        "gender" => $gender,
                        "education" => $education,
                        "Nationality" => $countries,
                        "ProfilePicture" => $file_name,
                     );

                     if(filesize("../model/SB_Users.json") == 0)
                     {
                        $first_data = array($json);
                        $data_to_save = $first_data;
                     }
                     else
                     {
                        $old_data = json_decode(file_get_contents("../model/SB_Users.json"));
                        array_push($old_data, $json);
                        $data_to_save = $old_data;
                     }

                     if (!file_put_contents("../model/SB_Users.json", json_encode($data_to_save, JSON_PRETTY_PRINT), LOCK_EX))
                     {
                        echo "<center><h1><font color=red>error in STORING JSON file";
                        header("refresh:3;	url=../view/CreateNewAccount.php");
                     }
                     else
                     {
                        if(move_uploaded_file($src, $des))
               			{
                           $_SESSION['dp'] = $_FILES['dp']['name'];

                           $sql = "INSERT INTO `sb_userlist` (`fullname`,`username`,`password`,`email`,`usertype`,`gender`,`education`,`nationality`,`dp`) VALUES ('$fullname','$username','$password','$email','$usertype','$gender','$education','$countries','$des')";

                  			if(mysqli_query($con, $sql))
                  			{
                           setcookie('username', $username, time()+3600, '/');
                           echo "<center><h1><font color=green>Redirecting to Login with the created account";
                           header("refresh:2;	url=../view/LoginPage.php");
                  			}
                  			else
                  			{
                  				echo "!! ERROR to store in database !!";
                  				header("refresh:3;	url=../view/CreateNewAccount.php");
                  			}
               			}
               			else
               			{
               				echo "<center><h2><font color = red>Error in Photo Upload.....";
                           header("refresh:3;	url=../view/CreateNewAccount.php");
               			}
                     }
                  }
                  elseif($usertype == "AH" && $gender == "male")
                  {
                     $file_name = $_FILES['dp']['name'];
                     $name = $_POST['username'];

                     $json = array(
                        "fullname" => $fullname,
                        "user_name" => $name,
                        "password" => $password,
                        "email" => $email,
                        "usertype" => $usertype,
                        "gender" => $gender,
                        "education" => $education,
                        "Nationality" => $countries,
                        "ProfilePicture" => $file_name,
                     );

                     if(filesize("../model/SB_Users.json") == 0)
                     {
                        $first_data = array($json);
                        $data_to_save = $first_data;
                     }
                     else
                     {
                        $old_data = json_decode(file_get_contents("../model/SB_Users.json"));
                        array_push($old_data, $json);
                        $data_to_save = $old_data;
                     }

                     if (!file_put_contents("../model/SB_Users.json", json_encode($data_to_save, JSON_PRETTY_PRINT), LOCK_EX))
                     {
                        echo "<center><h1><font color=red>error in STORING JSON file";
                        header("refresh:3;	url=../view/CreateNewAccount.php");
                     }
                     else
                     {
                        if(move_uploaded_file($src, $des))
               			{
                           $_SESSION['dp'] = $_FILES['dp']['name'];

                           $sql = "INSERT INTO `sb_userlist` (`fullname`,`username`,`password`,`email`,`usertype`,`gender`,`education`,`nationality`,`dp`) VALUES ('$fullname','$username','$password','$email','$usertype','$gender','$education','$countries','$des')";

                  			if(mysqli_query($con, $sql))
                  			{
                           setcookie('username', $username, time()+3600, '/');
                           echo "<center><h1><font color=green>Redirecting to Login with the created account";
                           header("refresh:2;	url=../view/LoginPage.php");
                  			}
                  			else
                  			{
                  				echo "!! ERROR to store in database !!";
                  				header("refresh:3;	url=../view/CreateNewAccount.php");
                  			}
               			}
               			else
               			{
               				echo "<center><h2><font color = red>Error in Photo Upload.....";
                           header("refresh:3;	url=../view/CreateNewAccount.php");
               			}
                     }
                  }
                  elseif($usertype == "AH" && $gender == "female")
                  {
                     $file_name = $_FILES['dp']['name'];
                     $name = $_POST['username'];

                     $json = array(
                        "fullname" => $fullname,
                        "user_name" => $name,
                        "password" => $password,
                        "email" => $email,
                        "usertype" => $usertype,
                        "gender" => $gender,
                        "education" => $education,
                        "Nationality" => $countries,
                        "ProfilePicture" => $file_name,
                     );

                     if(filesize("../model/SB_Users.json") == 0)
                     {
                        $first_data = array($json);
                        $data_to_save = $first_data;
                     }
                     else
                     {
                        $old_data = json_decode(file_get_contents("../model/SB_Users.json"));
                        array_push($old_data, $json);
                        $data_to_save = $old_data;
                     }

                     if (!file_put_contents("../model/SB_Users.json", json_encode($data_to_save, JSON_PRETTY_PRINT), LOCK_EX))
                     {
                        echo "<center><h1><font color=red>error in STORING JSON file";
                        header("refresh:3;	url=../view/CreateNewAccount.php");
                     }
                     else
                     {
                        if(move_uploaded_file($src, $des))
               			{
                           $_SESSION['dp'] = $_FILES['dp']['name'];

                           $sql = "INSERT INTO `sb_userlist` (`fullname`,`username`,`password`,`email`,`usertype`,`gender`,`education`,`nationality`,`dp`) VALUES ('$fullname','$username','$password','$email','$usertype','$gender','$education','$countries','$des')";

                  			if(mysqli_query($con, $sql))
                  			{
                           setcookie('username', $username, time()+3600, '/');
                           echo "<center><h1><font color=green>Redirecting to Login with the created account";
                           header("refresh:2;	url=../view/LoginPage.php");
                  			}
                  			else
                  			{
                  				echo "!! ERROR to store in database !!";
                  				header("refresh:3;	url=../view/CreateNewAccount.php");
                  			}
               			}
               			else
               			{
               				echo "<center><h2><font color = red>Error in Photo Upload.....";
                           header("refresh:3;	url=../view/CreateNewAccount.php");
               			}
                     }
                  }
                  else
                  {
                     echo "<center><h2><font color = red>invalid usertype and Gender...";
                     header("refresh:3;	url=../view/CreateNewAccount.php");
                  }
               }
            }
            else
            {
               echo "<center><h2><font color = red>No field should be empty ....";
               header("refresh:3;	url=../view/CreateNewAccount.php");
            }
   		}
      }


	}
	else
	{
		echo "<center><h2><font color = red>!! ~ NO FILE IS SELECTED YET ~ !!";
		header("refresh:3;	url=../view/CreateNewAccount.php");
	}

?>
