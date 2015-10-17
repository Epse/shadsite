<?php

// Define your username and password
$username = "johan";
$password = "Rn42DAay";
$shad_backend_sql = new mysqli("localhost", "shad_php", "Rq1vbDY6BD", "shad_backend");

if (isset($_GET['selectedPromo']) && !isset($_GET['delete']) && $_GET['delete'] != "Verwijder") {
  $result = $shad_backend_sql->query("SELECT * from promos WHERE title = '" . $_GET['selectedPromo'] . "'");
  if ($result != false) {
    $row = $result->fetch_assoc();
  } else {
    echo $shad_backend_sql->errno;
    die("<br>Error mysqling sutff");
  }
} elseif (isset($_GET['delete']) && $_GET['delete'] == "Verwijder") {
  $shad_backend_sql->query("DELETE FROM promos WHERE title = '" . $_GET['selectedPromo'] . "'");
}

$page = '<!DOCTYPE html>
<html>
  <head>
    <title>Shad.be</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap - simplex theme -->
    <link href="../assets/css/bootstrapshad.css" rel="stylesheet">
    <!-- jQuery library -->
    <script src="../assets/js/jquery.js" type="text/javascript" charset="utf-8"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="icon"
      href="../assets/favicon.ico">
    <!-- prettyPhoto stuffs -->
    <link rel="stylesheet" href="./assets/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
    <script src="../assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    <script src="../assets/js/jquery.rwdImageMaps.min.js"></script>

  </head>
  <body>
    <div class="container">
      <!-- header include -->
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="panel" style="margin-top: 20px;">
        <div class="panel-body">
        <h6 class="text-center">SHAD Belgium : cases - seats - luggage : <a href="mailto:info@shad.be" target="_blank">info@shad.be</a></h6>
        <img src="../logo.jpg" alt="logo" usemap="#headermap" class="img-responsive center-block">
      </div>
      </div>
        <map name="headermap">
          <area shape="rect" coords="844,0,990,175" href="http://www.motorcyclepartsnetwork.co.uk/wholesale/aftermarket/catalogo-shad-2015.pdf">
        </map>
        <div class="row">
          <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
            <nav id="myNavbar" class="navbar navbar-inverse" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Shadmin</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Promoties</a></li>
                  <li><a href="./nieuws.php">Nieuws</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
      </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
          <div class="panel">
            <div class="panel-heading">
              <h3>Kies een promo</h3>
            </div>
            <div class="panel-body">
              <form name="form" method="get" action="' . $_SERVER['PHP_SELF'] . '" class="form-horizontal">
                <fieldset>
                    <select name="selectedPromo"> ';
$result = $shad_backend_sql->query("SELECT * FROM promos");
for ($row_no = $result->num_rows - 1; $row_no >= 0; $row_no--) {
  $result->data_seek($row_no);
  $row = $result->fetch_assoc();
  $page = $page . "<option>" . $row['title'] . "</option>";
}
$page = $page . '
                    </select>
                    <br>
                    <input type="submit" name="Submit" value="Bekijk">
                    <input type="submit" value="Verwijder" name="delete">
                </fieldset>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
          <div class="panel">
            <div class="panel-heading">
              <h3>Bewerk Promo</h3>
            </div>
            <div class="panel-body">
              <form name="editForm" method="post" action="./processedit.php" class="form-horizontal" enctype="multipart/form-data">
                <fieldset>';
if (!isset($_GET['selectedPromo'])) {
  $page = $page . '
                  <label for="txtTitle" class="control-label">Titel</label>
                  <input type="text" name="txtTitle" id="txtTitle">
                  <label class="control-label" for="chkActive">Actief</label>
                  <input id="chkActive" name="chkActive" type="checkbox" value="1">
                  <label class="control-label" for="promoIMG">Nieuwe Afbeelding</label>
                  <input type="file" name="promoIMG" id="promoIMG">
                  <input type="submit" value="Opslaan" name="submit">';
} else {
  $result = $shad_backend_sql->query("SELECT * FROM promos WHERE title='" . $_GET['selectedPromo'] . "'");
  if($result != false) {
    $row = $result->fetch_assoc();
  } else {
    echo $shad_backend_sql->errno;
    die("error while looking for stuff");
  }
  $page = $page . '<label for="txtTitle" class="control-label">Titel</label>';
  $page = $page . '<input type="text" name="txtTitle" id="txtTitle" value="' . $row['title'] . '"><br>';
  $page = $page . '<label class="control-label" for="chkActive">Actief</label>';
  if ($row['active'] == 1) {
    $page = $page . '<input id="chkActive" name="chkActive" type="checkbox" value="1" checked><br>';
  } else {
    $page = $page . '<input id="chkActive" name="chkActive" type="checkbox" value="1"><br>';
  }
  $page = $page . '<label class="control-label" for="promoIMG">Nieuwe Afbeelding</label>';
  $page = $page . '<input type="file" name="promoIMG" id="promoIMG"><br>';
  $page = $page . '<a href=".' . $row['html'] . '" target="_blank">Huidige Afbeelding</a><br>';
  $page = $page . '<input type="hidden" name="creationDate" value="' . $row['creationDate'] . '">';
  $page = $page . '<input type="submit" value="Opslaan" name="submit">';
}
$page = $page . '
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="panel">
            <div class="panel-heading">
              <h3>Nieuwe promo</h3>
            </div>
            <div class="panel-body">
              <form name="newForm" method="post" action="./processnew.php" class="form-horizontal" enctype="multipart/form-data">
                <fieldset>
                  <label for="txtTitleNew" class="control-label">Titel</label>
                  <input type="text" id="txtTitleNew" name="txtTitleNew" placeholder="titel">
                  <br>
                  <label for="chkActiveNew" class="control-label">Actief</label>
                  <input type="checkbox" id="chkActiveNew" name="chkActiveNew" value="1">
                  <br>
                  <label for="newPromoIMG" class="control-label">Afbeelding</label>
                  <input type="file" name="newPromoIMG" id ="newPromoIMG">
                  <br>
                  <label for="chkUniq" class="control-label">Enige actief</label>
                  <input type="checkbox" id="chkUniq" name="chkUniq" value=1>
                  <br>
                  <input type="submit" value="Opslaan" name="submit">
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- footer include -->';
$page = $page . file_get_contents('../include/footer.php');
$page = $page . '
    </div>
  </body>
</html>';

if ($_POST['txtUsername'] == $username && $_POST['txtPassword'] == $password) {
    setcookie('shadmin', sha1($_POST['txtUsername'] . $_POST['txtPassword'] . $_SERVER['REMOTE_ADDR']), time()+60*60);

echo $page;
}
elseif ($_COOKIE['shadmin'] == sha1($username . $password . $_SERVER['REMOTE_ADDR'])) {
  echo $page;
} else {
?>
<!-- teh login form-->
<h1>Login</h1>

<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p><label for="txtUsername">Username:</label>
    <br /><input type="text" title="Enter your Username" name="txtUsername" /></p>

    <p><label for="txtpassword">Password:</label>
    <br /><input type="password" title="Enter your password" name="txtPassword" /></p>

    <p><input type="submit" name="Submit" value="Login" /></p>

</form>
<br>
<?php
}
$shad_backend_sql->close();
?>
