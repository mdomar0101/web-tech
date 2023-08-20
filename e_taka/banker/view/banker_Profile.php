<?php
   session_start();
   if(!isset($_COOKIE['username']))
   {
		header("location: ../../e_taka.html");
	}

   if(file_exists('../../CommonInterface/model/SB_Users.json'))
   {
   	$filename = '../../CommonInterface/model/SB_Users.json';
   	$data = file_get_contents($filename); //data read from json file
      $users = json_decode($data); //decode a data
      //$decoded_json = json_decode($data, true);

   }
   else
   {
      echo "<center><h2><font color = red>!! Expected Data could not be Found !!";
      header("refresh:3;	url=../view/banker_Profile.php");
   }
?>

<!DOCTYPE html>
 <html>

<head>
  <title>BANKER PROFILE</title>
</head>
   <body><center>
        <fieldset>
           <legend align="center"><h1>Profile of BANKER</h1></legend>
              <table border="2">
               <tr>
                 <td colspan="3"><a href="banker_Dashboard.php">Home of <?= $_COOKIE['username']?></a></td>
                 <a href="../view/banker_Dashboard.php">Back</a>
               </tr>
                <tr>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Usertype</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Education</th>
                    <th>Nationality</th>
                    <th>Profile Picture</th>
                </tr>

                <?php
                   foreach ($users as $user)
                   {
                ?>

                <tr>
                    <td> <?= $user->fullname; ?> </td>
                    <td> <?= $user->user_name; ?> </td>
                    <td> <?= $user->usertype; ?> </td>
                    <td> <?= $user->email; ?> </td>
                    <td> <?= $user->gender; ?> </td>
                    <td> <?= $user->education; ?> </td>
                    <td> <?= $user->Nationality; ?> </td>
                    <td><?= $user->ProfilePicture; ?></td>
                    <td> <a href="banker_Profile.php?fullname=<?= $user['fullname'] ?>">Edit</a> </td>
                </tr>

                <?php
                   }
                ?>

              </table>
        </fieldset>
   </center></body>
</html>
