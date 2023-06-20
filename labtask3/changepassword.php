<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $currentPassword = $_POST['currentPassword'];
  $newPassword = $_POST['newPassword'];

  // Validation rules
  $passwordPattern = '/^.*[@#$].{7,}$/';

  $errors = array();
