<?php
  require_once "include/const.inc.php";
  $shad_backend_sql = new mysqli(DB_HOST, DB_USER, DB_PSWD, DB_DEF_DB);
  $result = $shad_backend_sql->query("SELECT * FROM promos WHERE active = 1");
  if ($result->num_rows > 0)
  {
    // there is currently a promo running
    $row = $result->fetch_assoc();
    $promoHtml = $row['html'];
    if (!isset($_COOKIE['bipaPromoSeen']) && $_COOKIE['bipaPromoSeen'] != "true")
    {
      $showPromo = true;
      setcookie("bipaPromoSeen", "true", time() + 60*60);
    }
    else {
      $showPromo = false;
    }
    $shad_backend_sql->close();
  }
  else {
    $showPromo = false;
  }
?>
