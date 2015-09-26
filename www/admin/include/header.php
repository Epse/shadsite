<script>
$(document).ready(function(e) {
    $('img[usemap]').rwdImageMaps();
    $("a[rel^='prettyPhoto']").prettyPhoto({social_tools: false});
});
</script>
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
              if ($_SERVER['PHP_SELF'] == '/promo.php') {
                echo '<li class="active"><a href="#">Promobeheer</a></li>';
              }
              else {
                echo '<li><a href="./promo.php">Promobeheer</a></li>';
              }
            ?>
            <?php
              if ($_SERVER['PHP_SELF'] == '/nieuws.php') {
                echo '<li class="active"><a href="./dealers.php">Nieuwsbeheer</a></li>';
              }
              else {
                echo '<li><a href="./nieuws.php">Nieuwsbeheer</a></li>';
              }
            ?>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>
</div>
</div>
