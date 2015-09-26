<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap - simplex theme -->
<link href="./assets/css/bootstrapshad.css" rel="stylesheet">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="icon"
  href="./assets/favicon.ico">
<!-- prettyPhoto stuffs -->
<link rel="stylesheet" href="./assets/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script src="./assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<?php
  // Connect to MySQL DB
  $shad_backend_sql = new mysqli("localhost", "shad_manager", "4QitJVKSqBdw", "shad_backend");
  $result = $shad_backend_sql->query("SELECT * FROM promos WHERE active = 1");
  if (mysql_num_rows($result) > 0)
  {
    // there is currently a promo running
    $row = $result->fetch_assoc();
    $promoHtml = $row['html'];
    if (!isset($_COOKIE['bipaPromoSeen']) && $_COOKIE['bipaPromoSeen'] != "true")
    {
      $showPromo = true;
      setcookie("bipaPromoSeen", "true", 1);
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
