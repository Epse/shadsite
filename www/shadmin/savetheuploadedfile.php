<?php
if ($_COOKIE['shadmin'] == sha1($username . $password . $_SERVER['REMOTE_ADDR'])) {
//TODO List
// 1) Rename the File
// 2) For Multiple Upload , Loop through $_FILES
$dir_name = "uploads/";
    move_uploaded_file($_FILES['file']['tmp_name'],$dir_name.$_FILES['file']['name']);
    echo $dir_name.$_FILES['file']['name'];
} else {echo 'sorry, je bent niet ingelogd.';}
?>