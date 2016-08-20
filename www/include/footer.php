<div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12">
    <div class="panel panel-body">
      <p class="text-center">
        Koffers, tassen, zadels en accessoires van superieure kwaliteit.
        <br>Coffres, sacs, selles et accessoires de qualit&eacute; sup&eacute;rieure.
        <br>
        <hr width="80%" size="2">
      </p>
      <p class="text-center">
        Visit SHAD International <b> : </b><a href="http://www.shad.es/en/shad-world/" target="_blank">English</a> - <a href="http://www.shad.es/fr/shad-world/" target="_blank">Fran&ccedil;ais</a> - <a href="http://www.shad.es/de/shad-world/" target="_blank">Deutsch</a>
      </p>
      <img src="./assets/images/logo-aniversario-shad-80.png" class="img-respsonsive center-block">
    </div>
  </div>
  <!-- jQuery library -->
  <script src="https://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript" charset="utf-8"></script>
  <!-- Latest compiled JavaScript -->
  <script src="./assets/js/bootstrap.min.js"></script>
  <script src="./assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
  <script src="./assets/js/jquery.rwdImageMaps.min.js"></script>
  <script>
$(document).ready(function(e) {
    $('img[usemap]').rwdImageMaps();
    $("a[rel^='prettyPhoto']").prettyPhoto({social_tools: false});
    <?php
    if ($showPromo) {
      echo "$.prettyPhoto.open('";
      echo $promoHtml;
      echo "', '', '');";
    }
    ?>
});
</script>
</div>
</div>
<!-- Begin Cookie Consent script http://cookie-consent.org/ -->
<script type="text/javascript">
    window.cookieconsent_options = {"message":"SHAD Belgi&euml; gebruikt cookies om uw ervaring te verbeteren. SHAD Belgique utilize des cookies pour faire mieux votre exp&eacute;rience sur notre site.","dismiss":"OK","learnMore":"More info","link":null,"theme":"dark-bottom"}; var cookieconsent_id = 'e220014b-b376-4d6e-a6b0-8c5426ff5106';</script>

<script type="text/javascript" src="//cdn.front.to/libs/cookieconsent.min.4.js"></script>

<noscript><a href="http://cookie-consent.org/">EU cookie consent script</a> <a href="http://eu-cookie-law.info/">EU cookie law</a></noscript>
<!-- End Cookie Consent script -->

