<?php

require_once '../include/const.inc.php';

// Define your username and password
$username = "johan";
$password = "Rn42DAay";

if ($_COOKIE['shadmin'] == sha1($username . $password . $_SERVER['REMOTE_ADDR'])) {
  $shad_backend_sql = new mysqli(DB_HOST, DB_USER, DB_PSWD, DB_DEF_DB);
  $mysql_query = "INSERT INTO nieuws (title, html) VALUES ('{$_POST['title']}', '{$_POST['content']}')";
  $shad_backend_sql->query($mysql_query);
  if (!empty($shad_backend_sql->mysql_errno)) {
    echo '<h3>Mislukt</h3><br>{$shad_backend_sql->mysql_errno}';
  } else {
    echo '<h3>Succes</h3><br><a href="index.php">Keer terug</a>';
  }
} else {
  echo '<h3>Je bent niet ingelogd.</h3><br><a href="./index.php">Keer terug</a>';
}

?>
