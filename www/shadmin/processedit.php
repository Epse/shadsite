<?php

$shad_backend_sql = new mysqli("localhost", "shad_php", "Rq1vbDY6BD", "shad_backend");
$target_dir = "./assets/promoIMGS/";
if (isset($_FILES['promoIMG']['tmp_name'])) {
  $target_file = $target_dir . basename($_FILES['promoIMG']['name']);
  $uploadOK = 1;
  $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

  // Check for real image
    $check = getimagesize($_FILES['promoIMG']['tmp_name']);

  if ($check) {
    echo "File is an image - " . $check['mime'] . ".";
    $uploadOK = 1;
  } else {
    echo "File is not an image.";
    $uploadOK = 0;
  }

  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOK = 0;
  }

  if ($imageFileType != "jpg" && $imageFileType != "png"
    && $imageFileType != "jpeg" && $imageFileType != "gif") {
      echo "Sorry, only JPG, JPEG, PNG & GIF allowed.";
      $uploadOK = 0;
    }

  if (!$uploadOK) {
    echo "Sorry, try again.";
  } else {
    if (move_uploaded_file($_FILES['promoIMG']['tmp_name'], "." . $target_file)) {
      echo "The file " . basename($_FILES['promoIMG']['name']) . "has uploaded.";
    } else {
      echo 'An error occured.';
      die();
    }
  }
}

// Now process other data
$mysql_query = "UPDATE promos SET title='" . $_POST['txtTitle'] . ", active=" . $_POST['chkActive'];

if ($uploadOK) {
  $mysql_query = $mysql_query . " ,html='" . $target_file . "'";
}

$mysql_query = $mysql_query . " WHERE creationDate=" . $_POST['creationDate'];

$shad_backend_sql->query($mysql_query);

?>
