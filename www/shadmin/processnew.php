<?php

$shad_backend_sql = new mysqli("localhost", "shad_php", "Rq1vbDY6BD", "shad_backend");
$target_dir = "./assets/promoIMGS/";
if (!empty($_FILES['newPromoIMG']['name'])) {
  $target_file = $target_dir . basename($_FILES['newPromoIMG']['name']);
  $uploadOK = 1;
  $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

  // Check for real image
    $check = getimagesize($_FILES['newPromoIMG']['tmp_name']);

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
    echo 'upload OK';
    if (move_uploaded_file($_FILES['newPromoIMG']['tmp_name'], "." . $target_file)) {
      echo "The file " . basename($_FILES['newPromoIMG']['name']) . "has uploaded.";

      // If unique is set, make all active promos inactive
      if($_POST['chkUniq'] == 1) {
        $shad_backend_sql->query("UPDATE promos SET active=0 WHERE active=1");
      }

      if ($_POST['chkActiveNew'] == 1) {
        $mysql_query = "INSERT INTO promos (title, active, html) VALUES ('"
          . $_POST['txtTitleNew'] . "', 1, '"
          . $target_file . "')";
      } else {
        $mysql_query = "INSERT INTO promos (title, active, html) VALUES ('"
          . $_POST['txtTitleNew'] . "', 0, '"
          . $target_file . "')";
      }

      $shad_backend_sql->query($mysql_query);

    } else {
      echo 'An error occured.';
      die();
    }
  }
echo $mysql_query;
echo '<br>';
$shad_backend_sql->query($mysql_query);
echo '<a href="./index.php">Keer terug</a><br>';
echo $shad_backend_sql->errno;
}
?>