<?php

// Define your username and password
$username = "johan";
$password = "Rn42DAay";

if ($_COOKIE['shadmin'] == sha1($username . $password . $_SERVER['REMOTE_ADDR'])) {

  $shad_backend_sql = new mysqli("localhost", "shad_php", "Rq1vbDY6BD", "shad_backend");
  $target_dir = "./assets/promoIMGS/";
  if (!empty($_FILES['promoIMG']['name'])) {
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
  $mysql_query = "UPDATE promos SET title='" . $_POST['txtTitle'] . "', active=";

  if(!empty($_POST['chkActive'])) {
    $mysql_query = $mysql_query . "1";
  } else {
    $mysql_query = $mysql_query . "0";
  }

  if (!empty($uploadOK)) {
    $mysql_query = $mysql_query . " ,html='" . $target_file . "'";
  }

  $mysql_query = $mysql_query . " WHERE creationDate='" . $_POST['creationDate'] . "'";

  $shad_backend_sql->query($mysql_query);
  echo '<a href="./index.php">Keer terug</a>'

} else {
  echo '<h3>Je bent niet ingelogd.</h3><br><a href="./index.php">Keer terug</a>';
}

?>
