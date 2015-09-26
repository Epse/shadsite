<?php
  $shad_backend_sql = new mysqli("localhost", "shad_manager", "4QitJVKSqBdw", "shad_backend");
  $result = $shad_backend_sql->query("SELECT * FROM promos WHERE active = 1");
  if ($result->num_rows > 0)
  {
    // there is currently a promo running
    $row = $result->fetch_assoc();
    $promoHtml = $row['html'];
    if (!isset($_COOKIE['bipaPromoSeen']) && $_COOKIE['bipaPromoSeen'] != "true")
    {
      $showPromo = true;
      setcookie("bipaPromoSeen", "true");
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
