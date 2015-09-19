
<!DOCTYPE html>
<html>
<head>
  <title>Dealers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap - simplex theme -->
  <link href="./bootstrapshad.css" rel="stylesheet">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
   <!-- header include -->
   <?php include './include/header.php'; ?>

   <div class="row">
     <div class="col-lg-12">
       <div class="panel">
         <div class="panel-body">
           <?php
            if (isset($_GET['post_code']) && $_GET['post_code']!="") {
                if ($_GET['post_code'] >= 9000 && $_GET['post_code'] <= 9992) {
                  // Dealers voor Oost-Vlaanderen
                  echo '<div class=row>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.bikeparts.be" target="_blank">Bike Parts</a></b>
                  <br>Lokerenbaan 120
                  <br>9240 Zele
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.bikerszone.be" target="_blank">Bikers Zone</a></b>
                  <br>Vlamstraat 51
                  <br>9450 Denderhoutem
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b>De Pauw R.L.E.</b>
                  <br>Zeeschipstraat 32
                  <br>9000 Gent
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.erx.be" target="_blank">E.R.X.</a></b>
                  <br>Westergemstraat 140
                  <br>9032 Wondelgem
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.dirkvanmol.be" target="_blank">Moto&#39;s Dirk Van Mol</a></b>
                  <br>Krijgsbaan 78
                  <br>9140 Temse
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.rooseparck.be" target="_blank">Rooseparck</a></b>
                  <br>Heirweg 76
                  <br>9270 Kalken
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.motohandelwauters.be" target="_blank">Wauters Motohandel</a></b>
                  <br>Oostveldstraat 206-208
                  <br>9900 Eeklo
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.motorshopeeklo.be" target="_blank">Motorshop Eeklo</a></b>
                  <br>Zandvleuge 2
                  <br>9900 Eeklo
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['post_code'] >= 8000 && $_GET['post_code'] <= 8980) {
                  // Dealers voor Wes-Vlaanderen
                  echo '<div class=row>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.caset.be" target="_blank">Caset Auto Moto</a></b>
                  <br>Brugsebaan 24
                  <br>8810 Lichtervelde
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.knokke-scooters.be" target="_blank">Knokke Scooters</a></b>
                  <br>Lippenslaan 12
                  <br>8300 Knokke
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.motosmaes.be" target="_blank">Maes Moto&#39;s</a></b>
                  <br>Bruggestraat 465
                  <br>8930 Menen
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.powerwheels.be" target="_blank">Powerwheels</a></b>
                  <br>Poperingeweg 133
                  <br>8300 Ieper
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.yamahaschietecatte.be" target="_blank">Schietecatte</a></b>
                  <br>Peter Benoitstraat 8
                  <br>8570 Vichte
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['post_code'] >= 2000 && $_GET['post_code'] <= 2990) {
                  // Dealers voor Antwerpen
                  echo '<div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <p>
                  <b>2 Wheels</b>
                  <br>Lierselei 128
                  <br>2390 Oostmalle
                  </div>
                  </div>';
                }
                elseif ($_GET['post_code'] >= 3500 && $_GET['post_code'] <= 3990) {
                  // Dealers voor Limburg
                  echo '<div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.erckens.be" target="_blank">Erckens Tweewielershop</a></b>
                  <br>Halveweg 49
                  <br>3520 Zonhoven
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b>Jacqmaer</b>
                  <br>Taunusweg 16
                  <br>3740 Bilzen
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.mcg-racing.be" target="_blank">MCG-Racing</a></b>
                  <br>Gremelsoweg 2C (Industrieterrein&nbsp;Jagersborg)
                  <br>3680 Maaseik
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.trpracing.be" target="_blank">Thijs Motorhuis</a></b>
                  <br>Hasseltsesteenweg 201
                  <br>3800 Sint-Truiden
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['post_code'] >= 1500 && $_GET['post_code'] <= 3473) {
                  // Dealers voor Vlaams-Brabant
                  echo '<div class=row>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.deschouwermotos.be" target="_blank">Deschouwer Moto&#39;s</a></b>
                  <br>Brusselsesteenweg 455
                  <br>1980 Eppegem
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.moto5.be" target="_blank">Moto 5</a></b>
                  <br>Kerkstraat 12
                  <br>3381 Kapellen-Glabbeek
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.motodeluxe.be" target="_blank">Motodeluxe</a></b>
                  <br>Beringstraat 25
                  <br>3190 Boortmeerbeek
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.raiglotmoto.be" target="_blank">Raiglot Moto</a></b>
                  <br>Merchtemsesteenweg&nbsp;93C
                  <br>1861 Wolvertem
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b>Suzuki Center Tienen</b>
                  <br>Groot Overlaar 42
                  <br>3300 Tienen
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['post_code'] >= 1300 && $_GET['post_code'] <= 1495) {
                  // Dealers voor Waals-Brabant
                  echo '<div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b>City&nbsp;2&nbsp;Roues</b>
                  <br>Faubourg de Bruxelles 30
                  <br>1400 Nivelles
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b>Megastar Scoot</b>
                  <br>Chauss&eacute;e&nbsp;de&nbsp;Louvain&nbsp;501B
                  <br>1300 Wavre
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.goldenbikes.be" target="_blank">Golden Bikes</a></b>
                  <br>Chauss&eacute;e&nbsp;de&nbsp;Mons&nbsp;56
                  <br>1430 Rebecq
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.leclercqmotos.be" target="_blank">Leclercq Motos</a></b>
                  <br>Rue&nbsp;des&nbsp;D&eacute;port&eacute;s&nbsp;36
                  <br>1332 Genval
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['post_code'] >= 1000 && $_GET['post_code'] <= 1210) {
                  // Dealers voor Brussels Hoofdstedelijk Gewest
                }
                elseif ($_GET['post_code'] >= 4000 && $_GET['post_code'] <= 4990) {
                  // Dealers voor Luik
                }
                elseif ($_GET['post_code'] >= 6600 && $_GET['post_code'] <= 6997) {
                  // Dealers voor Luxemburg
                }
                elseif ($_GET['post_code'] >= 5000 && $_GET['post_code'] <= 5680) {
                  // Dealers voor Namen
                }
                elseif ($_GET['post_code'] >= 6000 && $_GET['post_code'] <= 7973) {
                  // Dealers voor Henegouwen
                }
                elseif ($_GET['post_code'] == 'all') {
                  // Toon alle dealers, per provincie
                }
                else {
                  // Incorrecte post_code
                  echo 'Postcode incorrect. Probeer het <a href="./dealers.php">opnieuw</a>.';
                }
            }
            elseif (isset($_GET['provincie']) && $_GET['provincie']!="") {
                if ($_GET['provincie'] == "Oost-Vlaanderen") {
                  // Dealers voor Oost-Vlaanderen
                  echo '<div class=row>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.bikeparts.be" target="_blank">Bike Parts</a></b>
                  <br>Lokerenbaan 120
                  <br>9240 Zele
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.bikerszone.be" target="_blank">Bikers Zone</a></b>
                  <br>Vlamstraat 51
                  <br>9450 Denderhoutem
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b>De Pauw R.L.E.</b>
                  <br>Zeeschipstraat 32
                  <br>9000 Gent
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.erx.be" target="_blank">E.R.X.</a></b>
                  <br>Westergemstraat 140
                  <br>9032 Wondelgem
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.dirkvanmol.be" target="_blank">Moto&#39;s Dirk Van Mol</a></b>
                  <br>Krijgsbaan 78
                  <br>9140 Temse
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.rooseparck.be" target="_blank">Rooseparck</a></b>
                  <br>Heirweg 76
                  <br>9270 Kalken
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.motohandelwauters.be" target="_blank">Wauters Motohandel</a></b>
                  <br>Oostveldstraat 206-208
                  <br>9900 Eeklo
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.motorshopeeklo.be" target="_blank">Motorshop Eeklo</a></b>
                  <br>Zandvleuge 2
                  <br>9900 Eeklo
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['provincie'] == "West-Vlaanderen") {
                  // Dealers voor Wes-Vlaanderen
                  echo '<div class=row>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.caset.be" target="_blank">Caset Auto Moto</a></b>
                  <br>Brugsebaan 24
                  <br>8810 Lichtervelde
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.knokke-scooters.be" target="_blank">Knokke Scooters</a></b>
                  <br>Lippenslaan 12
                  <br>8300 Knokke
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.motosmaes.be" target="_blank">Maes Moto&#39;s</a></b>
                  <br>Bruggestraat 465
                  <br>8930 Menen
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.powerwheels.be" target="_blank">Powerwheels</a></b>
                  <br>Poperingeweg 133
                  <br>8300 Ieper
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.yamahaschietecatte.be" target="_blank">Schietecatte</a></b>
                  <br>Peter Benoitstraat 8
                  <br>8570 Vichte
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['provincie'] == "Antwerpen") {
                  // Dealers voor Antwerpen
                  echo '<div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <p>
                  <b>2 Wheels</b>
                  <br>Lierselei 128
                  <br>2390 Oostmalle
                  </div>
                  </div>';
                }
                elseif ($_GET['provincie'] == "Limburg") {
                  // Dealers voor Limburg
                  echo '<div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.erckens.be" target="_blank">Erckens Tweewielershop</a></b>
                  <br>Halveweg 49
                  <br>3520 Zonhoven
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b>Jacqmaer</b>
                  <br>Taunusweg 16
                  <br>3740 Bilzen
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.mcg-racing.be" target="_blank">MCG-Racing</a></b>
                  <br>Gremelsoweg 2C (Industrieterrein&nbsp;Jagersborg)
                  <br>3680 Maaseik
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.trpracing.be" target="_blank">Thijs Motorhuis</a></b>
                  <br>Hasseltsesteenweg 201
                  <br>3800 Sint-Truiden
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['provincie'] == "Vlaams-Brabant") {
                  // Dealers voor Vlaams-Brabant
                  echo '<div class=row>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.deschouwermotos.be" target="_blank">Deschouwer Moto&#39;s</a></b>
                  <br>Brusselsesteenweg 455
                  <br>1980 Eppegem
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.moto5.be" target="_blank">Moto 5</a></b>
                  <br>Kerkstraat 12
                  <br>3381 Kapellen-Glabbeek
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.motodeluxe.be" target="_blank">Motodeluxe</a></b>
                  <br>Beringstraat 25
                  <br>3190 Boortmeerbeek
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.raiglotmoto.be" target="_blank">Raiglot Moto</a></b>
                  <br>Merchtemsesteenweg&nbsp;93C
                  <br>1861 Wolvertem
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b>Suzuki Center Tienen</b>
                  <br>Groot Overlaar 42
                  <br>3300 Tienen
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['provincie'] == "Waals-Brabant") {
                  // Dealers voor Waals-Brabant
                  echo '<div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b>City&nbsp;2&nbsp;Roues</b>
                  <br>Faubourg de Bruxelles 30
                  <br>1400 Nivelles
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b>Megastar Scoot</b>
                  <br>Chauss&eacute;e&nbsp;de&nbsp;Louvain&nbsp;501B
                  <br>1300 Wavre
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.goldenbikes.be" target="_blank">Golden Bikes</a></b>
                  <br>Chauss&eacute;e&nbsp;de&nbsp;Mons&nbsp;56
                  <br>1430 Rebecq
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.leclercqmotos.be" target="_blank">Leclercq Motos</a></b>
                  <br>Rue&nbsp;des&nbsp;D&eacute;port&eacute;s&nbsp;36
                  <br>1332 Genval
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['provincie'] == "Brussels Hoofdstedelijk Gewest") {
                  // Dealers voor Brussels Hoofdstedelijk Gewest
                }
                elseif ($_GET['provincie'] == "Luik") {
                  // Dealers voor Luik
                }
                elseif ($_GET['provincie'] == "Luxemburg") {
                  // Dealers voor Luxemburg
                }
                elseif ($_GET['provincie'] == "Namen") {
                  // Dealers voor Namen
                }
                elseif ($_GET['provincie'] == "Henegouwen") {
                  // Dealers voor Henegouwen
                }
            }
            else {
              // Toon het form om uw postcode in te geven
              $formshown = true;
              echo '<form method="get" action=".'.$_SERVER['PHP_SELF'].'" class="form-horizontal">
              <fieldset>
              <legend>Filter dealers</legend>
              <div class="form-group">
              <label for="inputPostcode" class="col-lg-2 control-label">Postcode</label>
              <div class="col-lg-10">
              <input class="form-control" id="inputPostcode" placeholder="Postcode" type="number" name="post_code">
              </div>
              </div>
              <div class="form-group">
              <label for="selProvincie" class="col-lg-2 control-label">Provincie</label>
              <div class="col-lg-10">
              <select class="form-control" id="selProvincie" name="provincie">
              <option>--Kies een provincie--</option>
              <option>Oost-Vlaanderen</option>
              <option>West-Vlaanderen</option>
              <option>Antwerpen</option>
              <option>Limburg</option>
              <option>Vlaams-Brabant</option>
              <option>Waals-Brabant</option>
              <option>Brussels Hoofdstedelijk Gewest</option>
              <option>Luik</option>
              <option>Luxemburg</option>
              <option>Namen</option>
              <option>Henegouwen</option>
              </select>
              <span class="help-block">Je hoeft maar &eacute;&eacute;n optie in te vullen.</span>
              </div>
              </div>
              <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
              <button type="reset" class="btn btn-default">Wis Gegevens</button>
              <button type="submit" class="btn btn-primary">Bekijk Dealers</button>
              </div>
              </div>
              </fieldset>
              </form>';
            }
           ?>
         </div>
       </div>
     </div>
   </div>

    <!-- footer include -->
    <?php include 'include/footer.php'; ?>
  </div>
  </div>
 </body>
 </html>
