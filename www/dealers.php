
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
  <link rel="icon"
    href="./assets/favicon.ico">
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
                  <br><a href="tel:052219486" class="visible-xs">052&nbsp;21&nbsp;94&nbsp;86</a>
                  <span class="hidden-xs">052&nbsp;21&nbsp;94&nbsp;86</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.bikerszone.be" target="_blank">Bikers Zone</a></b>
                  <br>Vlamstraat 51
                  <br>9450 Denderhoutem
                  <br><a href="tel:054335700" class="visible-xs">054&nbsp;33&nbsp;57&nbsp;00</a>
                  <span class="hidden-xs">054&nbsp;33&nbsp;57&nbsp;00</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.depauwrle.be" target="_blank">De Pauw R.L.E.</a></b>
                  <br>Zeeschipstraat 32
                  <br>9000 Gent
                  <br><a href="tel:092538259" class="visible-xs">092&nbsp;53&nbsp;82&nbsp;59</a>
                  <span class="hidden-xs">092&nbsp;53&nbsp;82&nbsp;59</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.erx.be" target="_blank">E.R.X.</a></b>
                  <br>Westergemstraat 140
                  <br>9032 Wondelgem
                  <br><a href="tel:092537327" class="visible-xs">092&nbsp;53&nbsp;73&nbsp;27</a>
                  <span class="hidden-xs">092&nbsp;53&nbsp;73&nbsp;27</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.dirkvanmol.be" target="_blank">Moto&#39;s Dirk Van Mol</a></b>
                  <br>Krijgsbaan 78
                  <br>9140 Temse
                  <br><a href="tel:037111792" class="visible-xs">037&nbsp;11&nbsp;17&nbsp;92</a>
                  <span class="hidden-xs">037&nbsp;11&nbsp;17&nbsp;92</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.rooseparck.be" target="_blank">Rooseparck</a></b>
                  <br>Heirweg 76
                  <br>9270 Kalken
                  <br><a href="tel:093675385" class="visible-xs">093&nbsp;67&nbsp;53&nbsp;85</a>
                  <span class="hidden-xs">093&nbsp;67&nbsp;53&nbsp;85</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.motohandelwauters.be" target="_blank">Wauters Motohandel</a></b>
                  <br>Oostveldstraat 206-208
                  <br>9900 Eeklo
                  <br><a href="tel:093771250" class="visible-xs">093&nbsp;77&nbsp;12&nbsp;50</a>
                  <span class="hidden-xs">093&nbsp;77&nbsp;12&nbsp;50</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.motorshopeeklo.be" target="_blank">Motorshop Eeklo</a></b>
                  <br>Zandvleuge 2
                  <br>9900 Eeklo
                  <br><a href="tel:093778849" class="visible-xs">093&nbsp;77&nbsp;88&nbsp;49</a>
                  <span class="hidden-xs">093&nbsp;77&nbsp;88&nbsp;49</span>
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
                  <br><a href="tel:051725512" class="visible-xs">051&nbsp;72&nbsp;55&nbsp;12</a>
                  <span class="hidden-xs">051&nbsp;72&nbsp;55&nbsp;12</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.knokke-scooters.be" target="_blank">Knokke Scooters</a></b>
                  <br>Lippenslaan 12
                  <br>8300 Knokke
                  <br><a href="tel:050628343" class="visible-xs">050&nbsp;62&nbsp;83&nbsp;43</a>
                  <span class="hidden-xs">050&nbsp;62&nbsp;83&nbsp;43</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.motosmaes.be" target="_blank">Maes Moto&#39;s</a></b>
                  <br>Bruggestraat 465
                  <br>8930 Menen
                  <br><a href="tel:056511207" class="visible-xs">056&nbsp;51&nbsp;12&nbsp;07</a>
                  <span class="hidden-xs">056&nbsp;51&nbsp;12&nbsp;07</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.powerwheels.be" target="_blank">Powerwheels</a></b>
                  <br>Poperingeweg 133
                  <br>8300 Ieper
                  <br><a href="tel:0477305523" class="visible-xs">0477&nbsp;30&nbsp;55&nbsp;23</a>
                  <span class="hidden-xs">0477&nbsp;30&nbsp;55&nbsp;23</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.schiettecatte.be" target="_blank">Schiettecatte</a></b>
                  <br>Peter Benoitstraat 8
                  <br>8570 Vichte
                  <br><a href="tel:056776877" class="visible-xs">056&nbsp;77&nbsp;68&nbsp;77</a>
                  <span class="hidden-xs">056&nbsp;77&nbsp;68&nbsp;77</span>
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['post_code'] >= 2000 && $_GET['post_code'] <= 2990) {
                  // Dealers voor Antwerpen
                  echo '<div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <p>
                  <b><a href="http://www.2wheels.be" target="_blank">2 Wheels</a></b>
                  <br>Lierselei 128
                  <br>2390 Oostmalle
                  <br><a href="tel:033123232" class="visible-xs">033&nbsp;12&nbsp;32&nbsp;32</a>
                  <span class="hidden-xs">033&nbsp;12&nbsp;32&nbsp;32</span>
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
                  <br><a href="tel:011813390" class="visible-xs">011&nbsp;81&nbsp;33&nbsp;90</a>
                  <span class="hidden-xs">011&nbsp;81&nbsp;33&nbsp;90</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b>Jacqmaer</b>
                  <br>Taunusweg 16
                  <br>3740 Bilzen
                  <br><a href="tel:089411376" class="visible-xs">089&nbsp;41&nbsp;13&nbsp;76</a>
                  <span class="hidden-xs">089&nbsp;41&nbsp;13&nbsp;76</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.mcg-racing.be" target="_blank">MCG-Racing</a></b>
                  <br>Gremelsoweg 2C (Industrieterrein&nbsp;Jagersborg)
                  <br>3680 Maaseik
                  <br><a href="tel:089861462" class="visible-xs">089&nbsp;86&nbsp;14&nbsp;62</a>
                  <span class="hidden-xs">089&nbsp;86&nbsp;14&nbsp;62</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.trpracing.be" target="_blank">Thijs Motorhuis</a></b>
                  <br>Hasseltsesteenweg 201
                  <br>3800 Sint-Truiden
                  <br><a href="tel:011684310" class="visible-xs">011&nbsp;68&nbsp;43&nbsp;10</a>
                  <span class="hidden-xs">011&nbsp;68&nbsp;43&nbsp;10</span>
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
                  <br><a href="tel:022522858" class="visible-xs">022&nbsp;52&nbsp;28&nbsp;58</a>
                  <span class="hidden-xs">022&nbsp;52&nbsp;28&nbsp;58</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.moto5.be" target="_blank">Moto 5</a></b>
                  <br>Kerkstraat 12
                  <br>3381 Kapellen-Glabbeek
                  <br><a href="tel:016602599" class="visible-xs">016&nbsp;60&nbsp;25&nbsp;99</a>
                  <span class="hidden-xs">016&nbsp;60&nbsp;25&nbsp;99</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.motodeluxe.be" target="_blank">Motodeluxe</a></b>
                  <br>Beringstraat 25
                  <br>3190 Boortmeerbeek
                  <br><a href="tel:015344737" class="visible-xs">015&nbsp;34&nbsp;47&nbsp;37</a>
                  <span class="hidden-xs">015&nbsp;34&nbsp;47&nbsp;37</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.raiglotmoto.be" target="_blank">Raiglot Moto</a></b>
                  <br>Merchtemsesteenweg&nbsp;93C
                  <br>1861 Wolvertem
                  <br><a href="tel:022673017" class="visible-xs">022&nbsp;69&nbsp;30&nbsp;17</a>
                  <span class="hidden-xs">022&nbsp;69&nbsp;30&nbsp;17</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.suzukicentertienen.be" target="_blank">Suzuki Center Tienen</a></b>
                  <br>Groot Overlaar 42
                  <br>3300 Tienen
                  <br><a href="tel:016811839" class="visible-xs">016&nbsp;81&nbsp;18&nbsp;39</a>
                  <span class="hidden-xs">016&nbsp;81&nbsp;18&nbsp;39</span>
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['post_code'] >= 1300 && $_GET['post_code'] <= 1495) {
                  // Dealers voor Waals-Brabant
                  echo '<div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.city2roues.com" target="_blank">City&nbsp;2&nbsp;Roues</a></b>
                  <br>Faubourg de Bruxelles 30
                  <br>1400 Nivelles
                  <br><a href="tel:0561235662" class="visible-xs">0561&nbsp;23&nbsp;56&nbsp;62</a>
                  <span class="hidden-xs">0561&nbsp;23&nbsp;56&nbsp;62</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b>Megastar Scoot</b>
                  <br>Chauss&eacute;e&nbsp;de&nbsp;Louvain&nbsp;501B
                  <br>1300 Wavre
                  <br><a href="tel:010888552" class="visible-xs">010&nbsp;888&nbsp;552</a>
                  <span class="hidden-xs">010&nbsp;888&nbsp;552</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.goldenbikes.be" target="_blank">Golden Bikes</a></b>
                  <br>Chauss&eacute;e&nbsp;de&nbsp;Mons&nbsp;56
                  <br>1430 Rebecq
                  <br><a href="tel:067333590" class="visible-xs">067&nbsp;333&nbsp;590</a>
                  <span class="hidden-xs">067&nbsp;333&nbsp;590</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.leclercqmotos.be" target="_blank">Leclercq Motos</a></b>
                  <br>Rue&nbsp;des&nbsp;D&eacute;port&eacute;s&nbsp;36
                  <br>1332 Genval
                  <br><a href="tel:026536786" class="visible-xs">026&nbsp;53&nbsp;67&nbsp;86</a>
                  <span class="hidden-xs">026&nbsp;53&nbsp;67&nbsp;86</span>
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['post_code'] >= 1000 && $_GET['post_code'] <= 1210) {
                  // Dealers voor Brussels Hoofdstedelijk Gewest
                  echo '<div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <p>
                  <b><a href="http://www.simeonmotos.com" target="_blank">Simeon Motos</a></b>
                  <br>Rue&nbsp;Valduc&nbsp;307-309
                  <br>1160 Bruxelles-Auderghem
                  <br><a href="tel:026755820" class="visible-xs">026&nbsp;75&nbsp;58&nbsp;20</a>
                  <span class="hidden-xs">026&nbsp;75&nbsp;58&nbsp;20</span>
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['post_code'] >= 4000 && $_GET['post_code'] <= 4990) {
                  // Dealers voor Luik
                  echo '<p><b>Momenteel zijn er geen dealers binnen de provincie Luik.
                  Wilt u het <a href="./dealers.php">opnieuw proberen</a>?</b></p>';
                }
                elseif ($_GET['post_code'] >= 6600 && $_GET['post_code'] <= 6997) {
                  // Dealers voor Luxemburg
                  echo '<p><b>Momenteel zijn er geen dealers binnen de provincie Luxemburg.
                  Wilt u het <a href="./dealers.php">opnieuw proberen</a>?</b></p>';
                }
                elseif ($_GET['post_code'] >= 5000 && $_GET['post_code'] <= 5680) {
                  // Dealers voor Namen
                  echo'<div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <p>
                  <b><a href="http://www.wupstore.be" target="_blank">WupStore</a></b>
                  <br>Rue&nbsp;Belle&nbsp;Mine&nbsp;20B
                  <br>5300 Andenne
                  <br><a href="tel:0473950996" class="visible-xs">0473&nbsp;95&nbsp;09&nbps;96</a>
                  <span class="hidden-xs">0473&nbsp;95&nbsp;09&nbsp;96</span>
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['post_code'] >= 6000 && $_GET['post_code'] <= 7973) {
                  // Dealers voor Henegouwen
                  echo '<div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <p>
                  <b><a href="http://www.casu-motos.com" target="_blank">Casu Moto&#39;s Mons</a></b>
                  <br>Rue&nbsp;des&nbsp;Guimauves&nbsp;2
                  <br>7033 Cuesmess
                  <br><a href="tel:065363639" class="visible-xs">065&nbsp;36&nbsp;36&nbsp;39</a>
                  <span class="hidden-xs">065&nbsp;36&nbsp;36&nbsp;39</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <p>
                  <b><a href="http://www.chimotto.com" target="_blank">Chim&#39;Otto</a></b>
                  <br>Chauss&eacute;e&nbsp;de&nbsp;Mons&nbsp;64
                  <br>6460 Chimay
                  <br><a href="tel:060214176" class="visible-xs">060&nbsp;21&nbsp;41&nbsp;76</a>
                  <span class="hidden-xs">060&nbsp;21&nbsp;41&nbsp;76</span>
                  </p>
                  </div>
                  </div>';
                }
                else {
                  // Incorrecte post_code
                  echo 'Postcode incorrect. Probeer het <a href="./dealers.php">opnieuw</a>.';
                }
            }
            elseif (isset($_GET['provincie']) && $_GET['provincie']!="") {
                if ($_GET['provincie'] == "Oost-Vlaanderen" || $_GET['provincie']=="Flandre Orientale") {
                  // Dealers voor Oost-Vlaanderen
                  echo '<div class=row>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.bikeparts.be" target="_blank">Bike Parts</a></b>
                  <br>Lokerenbaan 120
                  <br>9240 Zele
                  <br><a href="tel:052219486" class="visible-xs">052&nbsp;21&nbsp;94&nbsp;86</a>
                  <span class="hidden-xs">052&nbsp;21&nbsp;94&nbsp;86</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.bikerszone.be" target="_blank">Bikers Zone</a></b>
                  <br>Vlamstraat 51
                  <br>9450 Denderhoutem
                  <br><a href="tel:054335700" class="visible-xs">054&nbsp;33&nbsp;57&nbsp;00</a>
                  <span class="hidden-xs">054&nbsp;33&nbsp;57&nbsp;00</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.depauwrle.be" target="_blank">De Pauw R.L.E.</a></b>
                  <br>Zeeschipstraat 32
                  <br>9000 Gent
                  <br><a href="tel:092538259" class="visible-xs">092&nbsp;53&nbsp;82&nbsp;59</a>
                  <span class="hidden-xs">092&nbsp;53&nbsp;82&nbsp;59</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.erx.be" target="_blank">E.R.X.</a></b>
                  <br>Westergemstraat 140
                  <br>9032 Wondelgem
                  <br><a href="tel:092537327" class="visible-xs">092&nbsp;53&nbsp;73&nbsp;27</a>
                  <span class="hidden-xs">092&nbsp;53&nbsp;73&nbsp;27</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.dirkvanmol.be" target="_blank">Moto&#39;s Dirk Van Mol</a></b>
                  <br>Krijgsbaan 78
                  <br>9140 Temse
                  <br><a href="tel:037111792" class="visible-xs">037&nbsp;11&nbsp;17&nbsp;92</a>
                  <span class="hidden-xs">037&nbsp;11&nbsp;17&nbsp;92</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.rooseparck.be" target="_blank">Rooseparck</a></b>
                  <br>Heirweg 76
                  <br>9270 Kalken
                  <br><a href="tel:093675385" class="visible-xs">093&nbsp;67&nbsp;53&nbsp;85</a>
                  <span class="hidden-xs">093&nbsp;67&nbsp;53&nbsp;85</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.motohandelwauters.be" target="_blank">Wauters Motohandel</a></b>
                  <br>Oostveldstraat 206-208
                  <br>9900 Eeklo
                  <br><a href="tel:093771250" class="visible-xs">093&nbsp;77&nbsp;12&nbsp;50</a>
                  <span class="hidden-xs">093&nbsp;77&nbsp;12&nbsp;50</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.motorshopeeklo.be" target="_blank">Motorshop Eeklo</a></b>
                  <br>Zandvleuge 2
                  <br>9900 Eeklo
                  <br><a href="tel:093778849" class="visible-xs">093&nbsp;77&nbsp;88&nbsp;49</a>
                  <span class="hidden-xs">093&nbsp;77&nbsp;88&nbsp;49</span>
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['provincie'] == "West-Vlaanderen" || $_GET['provincie']=="Flandre Occidentale") {
                  // Dealers voor Wes-Vlaanderen
                  echo '<div class=row>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.caset.be" target="_blank">Caset Auto Moto</a></b>
                  <br>Brugsebaan 24
                  <br>8810 Lichtervelde
                  <br><a href="tel:051725512" class="visible-xs">051&nbsp;72&nbsp;55&nbsp;12</a>
                  <span class="hidden-xs">051&nbsp;72&nbsp;55&nbsp;12</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.knokke-scooters.be" target="_blank">Knokke Scooters</a></b>
                  <br>Lippenslaan 12
                  <br>8300 Knokke
                  <br><a href="tel:050628343" class="visible-xs">050&nbsp;62&nbsp;83&nbsp;43</a>
                  <span class="hidden-xs">050&nbsp;62&nbsp;83&nbsp;43</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.motosmaes.be" target="_blank">Maes Moto&#39;s</a></b>
                  <br>Bruggestraat 465
                  <br>8930 Menen
                  <br><a href="tel:056511207" class="visible-xs">056&nbsp;51&nbsp;12&nbsp;07</a>
                  <span class="hidden-xs">056&nbsp;51&nbsp;12&nbsp;07</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.powerwheels.be" target="_blank">Powerwheels</a></b>
                  <br>Poperingeweg 133
                  <br>8300 Ieper
                  <br><a href="tel:0477305523" class="visible-xs">0477&nbsp;30&nbsp;55&nbsp;23</a>
                  <span class="hidden-xs">0477&nbsp;30&nbsp;55&nbsp;23</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.schiettecatte.be" target="_blank">Schiettecatte</a></b>
                  <br>Peter Benoitstraat 8
                  <br>8570 Vichte
                  <br><a href="tel:056776877" class="visible-xs">056&nbsp;77&nbsp;68&nbsp;77</a>
                  <span class="hidden-xs">056&nbsp;77&nbsp;68&nbsp;77</span>
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['provincie'] == "Antwerpen" || $_GET['provincie']=="Anvers") {
                  // Dealers voor Antwerpen
                  echo '<div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <p>
                  <b><a href="http://www.2wheels.be" target="_blank">2 Wheels</a></b>
                  <br>Lierselei 128
                  <br>2390 Oostmalle
                  <br><a href="tel:033123232" class="visible-xs">033&nbsp;12&nbsp;32&nbsp;32</a>
                  <span class="hidden-xs">033&nbsp;12&nbsp;32&nbsp;32</span>
                  </div>
                  </div>';
                }
                elseif ($_GET['provincie'] == "Limburg"||$_GET['provincie']=="Limbourg") {
                  // Dealers voor Limburg
                  echo '<div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.erckens.be" target="_blank">Erckens Tweewielershop</a></b>
                  <br>Halveweg 49
                  <br>3520 Zonhoven
                  <br><a href="tel:011813390" class="visible-xs">011&nbsp;81&nbsp;33&nbsp;90</a>
                  <span class="hidden-xs">011&nbsp;81&nbsp;33&nbsp;90</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.jacqmaer.be" target="_blank">Jacqmaer</a></b>
                  <br>Taunusweg 16
                  <br>3740 Bilzen
                  <br><a href="tel:089411376" class="visible-xs">089&nbsp;41&nbsp;13&nbsp;76</a>
                  <span class="hidden-xs">089&nbsp;41&nbsp;13&nbsp;76</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.mcg-racing.be" target="_blank">MCG-Racing</a></b>
                  <br>Gremelsoweg 2C (Industrieterrein&nbsp;Jagersborg)
                  <br>3680 Maaseik
                  <br><a href="tel:089861462" class="visible-xs">089&nbsp;86&nbsp;14&nbsp;62</a>
                  <span class="hidden-xs">089&nbsp;86&nbsp;14&nbsp;62</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.trpracing.be" target="_blank">Thijs Motorhuis</a></b>
                  <br>Hasseltsesteenweg 201
                  <br>3800 Sint-Truiden
                  <br><a href="tel:011684310" class="visible-xs">011&nbsp;68&nbsp;43&nbsp;10</a>
                  <span class="hidden-xs">011&nbsp;68&nbsp;43&nbsp;10</span>
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['provincie'] == "Vlaams-Brabant" || $_GET['provincie']=="Brabant flamand") {
                  // Dealers voor Vlaams-Brabant
                  echo '<div class=row>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.deschouwermotos.be" target="_blank">Deschouwer Moto&#39;s</a></b>
                  <br>Brusselsesteenweg 455
                  <br>1980 Eppegem
                  <br><a href="tel:022522858" class="visible-xs">022&nbsp;52&nbsp;28&nbsp;58</a>
                  <span class="hidden-xs">022&nbsp;52&nbsp;28&nbsp;58</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.moto5.be" target="_blank">Moto 5</a></b>
                  <br>Kerkstraat 12
                  <br>3381 Kapellen-Glabbeek
                  <br><a href="tel:016602599" class="visible-xs">016&nbsp;60&nbsp;25&nbsp;99</a>
                  <span class="hidden-xs">016&nbsp;60&nbsp;25&nbsp;99</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.motodeluxe.be" target="_blank">Motodeluxe</a></b>
                  <br>Beringstraat 25
                  <br>3190 Boortmeerbeek
                  <br><a href="tel:015344737" class="visible-xs">015&nbsp;34&nbsp;47&nbsp;37</a>
                  <span class="hidden-xs">015&nbsp;34&nbsp;47&nbsp;37</span>>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.raiglotmoto.be" target="_blank">Raiglot Moto</a></b>
                  <br>Merchtemsesteenweg&nbsp;93C
                  <br>1861 Wolvertem
                  <br><a href="tel:022673017" class="visible-xs">022&nbsp;69&nbsp;30&nbsp;17</a>
                  <span class="hidden-xs">022&nbsp;69&nbsp;30&nbsp;17</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                  <p>
                  <b><a href="http://www.suzukicentertienen.be" target="_blank">Suzuki Center Tienen</a></b>
                  <br>Groot Overlaar 42
                  <br>3300 Tienen
                  <br><a href="tel:016811839" class="visible-xs">016&nbsp;81&nbsp;18&nbsp;39</a>
                  <span class="hidden-xs">016&nbsp;81&nbsp;18&nbsp;39</span>
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['provincie'] == "Waals-Brabant"|| $_GET['provincie']=="Brabant wallon") {
                  // Dealers voor Waals-Brabant
                  echo '<div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.city2roues.com" target="_blank">City&nbsp;2&nbsp;Roues</a></b>
                  <br>Faubourg de Bruxelles 30
                  <br>1400 Nivelles
                  <br><a href="tel:0561235662" class="visible-xs">0561&nbsp;23&nbsp;56&nbsp;62</a>
                  <span class="hidden-xs">0561&nbsp;23&nbsp;56&nbsp;62</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b>Megastar Scoot</b>
                  <br>Chauss&eacute;e&nbsp;de&nbsp;Louvain&nbsp;501B
                  <br>1300 Wavre
                  <br><a href="tel:010888552" class="visible-xs">010&nbsp;888&nbsp;552</a>
                  <span class="hidden-xs">010&nbsp;888&nbsp;552</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.goldenbikes.be" target="_blank">Golden Bikes</a></b>
                  <br>Chauss&eacute;e&nbsp;de&nbsp;Mons&nbsp;56
                  <br>1430 Rebecq
                  <br><a href="tel:067333590" class="visible-xs">067&nbsp;333&nbsp;590</a>
                  <span class="hidden-xs">067&nbsp;333&nbsp;590</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <p>
                  <b><a href="http://www.leclercqmotos.be" target="_blank">Leclercq Motos</a></b>
                  <br>Rue&nbsp;des&nbsp;D&eacute;port&eacute;s&nbsp;36
                  <br>1332 Genval
                  <br><a href="tel:026536786" class="visible-xs">026&nbsp;53&nbsp;67&nbsp;86</a>
                  <span class="hidden-xs">026&nbsp;53&nbsp;67&nbsp;86</span>
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['provincie'] == "Brussels Hoofdstedelijk Gewest"||$_GET['provincie']=="Bruxellse-Capitale") {
                  // Dealers voor Brussels Hoofdstedelijk Gewest
                  echo '<div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <p>
                  <b><a href="http://www.simeonmotos.com" target="_blank">Simeon Motos</a></b>
                  <br>Rue&nbsp;Valduc&nbsp;307-309
                  <br>1160 Bruxelles-Auderghem
                  <br><a href="tel:026755820" class="visible-xs">026&nbsp;75&nbsp;58&nbsp;20</a>
                  <span class="hidden-xs">026&nbsp;75&nbsp;58&nbsp;20</span>
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['provincie'] == "Luik") {
                  // Dealers voor Luik
                  echo '<p><b>Momenteel zijn er geen dealers binnen de provincie Luik.
                  Wilt u het <a href="./dealers.php">opnieuw proberen</a>?</b></p>';
                }
                elseif ($_GET['provincie']=="Liège") {
                  echo '<p><b>Actuellement, il n&#39;y a pas de dealers dans le province de Li&egrave;ge.
                  Voulez-vous <a href="./dealers.php">essayer encoure une fois</a>?</b></p>';
                }
                elseif ($_GET['provincie'] == "Luxemburg") {
                  // Dealers voor Luxemburg
                  echo '<p><b>Momenteel zijn er geen dealers binnen de provincie Luxemburg.
                  Wilt u het <a href="./dealers.php">opnieuw proberen</a>?</b></p>';
                }
                elseif ($_GET['privincie'] == "Luxembourg") {
                  echo '<p><b>Actuellement, il n&#39;y a pas de dealers dans le province de Luxembourg.
                  Voulez-vous <a href="./dealers.php">essayer encoure une fois</a>?</b></p>';
                }
                elseif ($_GET['provincie'] == "Namen" || $_GET['provincie']=="Namur") {
                  // Dealers voor Namen
                  echo'<div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <p>
                  <b><a href="http://www.wupstore.be" target="_blank">WupStore</a></b>
                  <br>Rue&nbsp;Belle&nbsp;Mine&nbsp;20B
                  <br>5300 Andenne
                  <br><a href="tel:0473950996" class="visible-xs">0473&nbsp;95&nbsp;09&nbps;96</a>
                  <span class="hidden-xs">0473&nbsp;95&nbsp;09&nbsp;96</span>
                  </p>
                  </div>
                  </div>';
                }
                elseif ($_GET['provincie'] == "Henegouwen" || $_GET['provincie']=="Hainaut") {
                  // Dealers voor Henegouwen
                  echo '<div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <p>
                  <b><a href="http://www.casu-motos.com" target="_blank">Casu Moto&#39;s Mons</a></b>
                  <br>Rue&nbsp;des&nbsp;Guimauves&nbsp;2
                  <br>7033 Cuesmess
                  <br><a href="tel:065363639" class="visible-xs">065&nbsp;36&nbsp;36&nbsp;39</a>
                  <span class="hidden-xs">065&nbsp;36&nbsp;36&nbsp;39</span>
                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <p>
                  <b><a href="http://www.chimotto.com" target="_blank">Chim&#39;Otto</a></b>
                  <br>Chauss&eacute;e&nbsp;de&nbsp;Mons&nbsp;64
                  <br>6460 Chimay
                  <br><a href="tel:060214176" class="visible-xs">060&nbsp;21&nbsp;41&nbsp;76</a>
                  <span class="hidden-xs">060&nbsp;21&nbsp;41&nbsp;76</span>
                  </p>
                  </div>
                  </div>';
                }
            }
            else {
              // Toon het form om uw postcode in te geven
              $formshown = true;
              echo '<div class="row"><div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><form method="get" action=".'.$_SERVER['PHP_SELF'].'" class="form-horizontal">
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
              </form></div>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><form method="get" action=".'.$_SERVER['PHP_SELF'].'" class="form-horizontal">
              <fieldset>
              <legend>Filtrer les dealers</legend>
              <div class="form-group">
              <label for="inputPostcode" class="col-lg-2 control-label">Code Postale</label>
              <div class="col-lg-10">
              <input class="form-control" id="inputPostcode" placeholder="Code Postale" type="number" name="post_code">
              </div>
              </div>
              <div class="form-group">
              <label for="selProvincie" class="col-lg-2 control-label">Province</label>
              <div class="col-lg-10">
              <select class="form-control" id="selProvincie" name="provincie">
              <option>--Choisissez--</option>
              <option>Flandre Orientale</option>
              <option>Flandre Occidentale</option>
              <option>Anvers</option>
              <option>Limbourg</option>
              <option>Brabant flamand</option>
              <option>Brabant wallon</option>
              <option>Bruxellse-Capitale</option>
              <option>Liège</option>
              <option>Luxembourg</option>
              <option>Namur</option>
              <option>Hainaut</option>
              </select>
              <span class="help-block">Vous devez seulement completer une option.</span>
              </div>
              </div>
              <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
              <button type="reset" class="btn btn-default">Recommen&ccedil;er</button>
              <button type="submit" class="btn btn-primary">Envoyer</button>
              </div>
              </div>
              </fieldset>
              </form></div></div>';
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
