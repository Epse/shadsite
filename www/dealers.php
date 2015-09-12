
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
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
            if (isset($_GET['post_code'])) {
              if ($_GET['post_code'] >= 9000 && $_GET['post_code'] <= 9992) {
                // Dealers voor Oost-Vlaanderen
              }
              elseif ($_GET['post_code'] >= 8000 && $_GET['post_code'] <= 8980) {
                // Dealers voor Wes-Vlaanderen
              }
              elseif ($_GET['post_code'] >= 2000 && $_GET['post_code'] <= 2990) {
                // Dealers voor Antwerpen
              }
              elseif ($_GET['post_code'] >= 3500 && $_GET['post_code'] <= 3990) {
                // Dealers voor Limburg
              }
              elseif ($_GET['post_code'] >= 1500 && $_GET['post_code'] <= 3473) {
                // Dealers voor Vlaams-Brabant
              }
              elseif ($_GET['post_code'] >= 1300 && $_GET['post_code'] <= 1495) {
                // Dealers voor Waals-Brabant
              }
              elseif ($_GET['post_code'] >= 1000 && $_GET['post_code'] <= 1210) {
                // Dealers voor Brussels Hoofdstedelijk Gewest
              }
              elseif ($_GET['post_code'] >= 4000 && $_GET['post_code'] <= 49990) {
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
            else {
              // Toon het form om uw postcode in te geven
              echo '<form method="get" action=".'.$_SERVER['PHP_SELF'].'" class="form-horizontal">
              <fieldset>
              <legend>Filter dealers</legend>
              <div class="form-group">
              <label for="inputPostcode" class="col-lg-2 control-label">Postcode</label>
              <div class="col-lg-10">
              <input class="form-control" id="inputPostcode placeholder="Postcode" type="number" name="post_code">
              </div>
              </div>
              <div class="form-group">
              <label for="selProvincie" class="col-lg-2 control-label">Provincie</label>
              <div class="col-lg-10">
              <select class="form-control" id="selProvincie" name="provincie">
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
 </body>
 </html>
