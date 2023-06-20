<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];


  $usernamePattern = '/^[A-Za-z0-9\.\-_]{2,}$/';
  $passwordPattern = '/^.*[@#$].{7,}$/';

  $errors = array();

  
  if (!preg_match($usernamePattern, $username)) {
    $errors[] = 'Invalid username format. User Name can contain alphanumeric characters, period, dash, or underscore only.';
  }

  if (strlen($password) < 8 || !preg_match($passwordPattern, $password)) {
    $errors[] = 'Invalid password format. Password must not be less than eight (8) characters and must contain at least one of the special characters (@, #, $, or %).';
  }

  
  if (!empty($errors)) {
    echo '<h2>Error:</h2>';
    echo '<ul>';
    foreach ($errors as $error) {
      echo '<li>' . $error . '</li>';
    }
    echo '</ul>';
  } else {
    
    echo '<h2>Login Successful!</h2>';
 
  }
}
?>
