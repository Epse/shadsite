<?php
// Include database connection and functions here.  See 3.1.
sec_session_start();
if(login_check($mysqli) == true) {
      echo 'hey bro!';
} else {
      echo 'You are not authorized to access this page, please <a href="./index.php">login.</a>';
}
?>
