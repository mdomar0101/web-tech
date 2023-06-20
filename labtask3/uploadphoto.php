<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if a file was uploaded successfully
  if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $photoName = $_FILES['photo']['name'];
    $photoTmpName = $_FILES['photo']['tmp_name'];
    $photoSize = $_FILES['photo']['size'];
    $photoType = $_FILES['photo']['type'];

    // Validate file type (optional)
    $allowedTypes = array('image/jpeg', 'image/png');
    if (!in_array($photoType, $allowedTypes)) {
      echo 'Invalid file type. Only JPEG and PNG files are allowed.';
      exit;
    }

    // Move the uploaded file to the desired location
    $uploadDirectory = 'uploads/';
    $targetFilePath = $uploadDirectory . $photoName;
    if (move_uploaded_file($photoTmpName, $targetFilePath)) {
      echo 'Photo uploaded successfully!';
    } else {
      echo 'Failed to upload photo. Please try again.';
    }
  } else {
    echo 'Error occurred while uploading the photo. Please try again.';
  }
}
?>
