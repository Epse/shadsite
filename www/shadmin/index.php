<?php

// Define your username and password
$username = "johan";
$password = "Rn42DAay";

if ($_POST['txtUsername'] == $username && $_POST['txtPassword'] == $password) {
    setcookie('shadmin', sha1($_POST['txtUsername'] . $_POST['txtPassword'] . $_SERVER['REMOTE_ADDR']), time()+60*60);
?>
<!-- here be teh page too -->
<!DOCTYPE html>
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
                  <li><a href="./promo.php">Promoties</a></li>
                  <li><a href="./nieuws.php">Nieuws</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
      </div>
      </div>
      <!-- footer include -->
      <?php include '../include/footer.php'; ?>
    </div>
  </body>
</html>
<?php
}
elseif ($_COOKIE['shadmin'] == sha1($username . $password . $_SERVER['REMOTE_ADDR'])) {
  ?>
  <!-- Here be teh page -->
  <!DOCTYPE html>
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
                    <li><a href="./promo.php">Promoties</a></li>
                    <li><a href="./nieuws.php">Nieuws</a></li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
        </div>
        </div>
        <!-- footer include -->
        <?php include '../include/footer.php'; ?>
      </div>
    </body>
  </html>
<?php
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

?>
