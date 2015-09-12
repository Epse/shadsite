<div class="panel">
  <div class="panel-body">
  <p id="headertxt">SHAD Belgium : cases - seats - luggage : <a href="mailto:info@shad.be" target="_blank">info@shad.be</a></p>
  <img src="../logo.jpg" alt="logo" usemap="#headermap" class="center-block">
</div>
</div>
  <map name="headermap">
    <area shape="rect" coords="844,0,990,175" href="http://www.shad.es/getCatalogue.php">
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
          <a class="navbar-brand" href="#">Shad</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="nav navbar-nav">
            <?php
              if ($_SERVER['PHP_SELF'] == '/index.php') {
                echo '<li class="active"><a href="#">Home</a></li>';
              }
              else {
                echo '<li><a href="./index.php">Home</a></li>';
              }
            ?>
            <?php
              if ($_SERVER['PHP_SELF'] == '/welkom.php') {
                echo '<li class="active"><a href="#">Home</a></li>';
              }
              else {
                echo '<li><a href="./welkom.php">Welkom</a></li>';
              }
            ?>
            <?php
              if ($_SERVER['PHP_SELF'] == '/bienvenue.php') {
                echo '<li class="active"><a href="#">Bienvenue</a></li>';
              }
              else {
                echo '<li><a href="./bienvenue.php">Bienvenue</a></li>';
              }
            ?>
            <?php
              if ($_SERVER['PHP_SELF'] == '/products.php') {
                echo '<li class="active"><a href="#">Producten</a></li>';
              }
              else {
                echo '<li><a href="./products.php">Producten</a></li>';
              }
            ?>
            <?php
              if ($_SERVER['PHP_SELF'] == '/dealers.php') {
                echo '<li class="active"><a href="#">Dealers</a></li>';
              }
              else {
                echo '<li><a href="./dealers.php">Dealers</a></li>';
              }
            ?>
            <li><a href="http://www.bike-design.com/nl/categorie/145020/bagage-shad" target="_blank">Bestel Nu!</a></li>
            <?php
              if ($_SERVER['PHP_SELF'] == '/newsletter.php') {
                echo '<li class="active"><a href="#">Nieuwsbrief</a></li>';
              }
              else {
                echo '<li><a href="./newsletter.php">Nieuwsbrief</a></li>';
              }
            ?>
            <?php
              if ($_SERVER['PHP_SELF'] == '/contact__.php') {
                echo '<li class="active"><a href="#">Contact</a></li>';
              }
              else {
                echo '<li><a href="./contact__.php">Contact</a></li>';
              }
            ?>
          </ul>
        </div>
      </div>
    </nav>
  </div>
