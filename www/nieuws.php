<?php 
  include './include/cookie.php';
  require_once 'include/const.inc.php'; 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Shad.be</title>
  <?php include './include/head.php'; ?>
  </head>
  <body>
    <div class="container">
      <!-- header include -->
      <?php include 'include/header.php'; ?>
      <div class="row">
        <?php
        $shad_backend_sql = new mysqli(DB_HOST, DB_USER, DB_PSWD, DB_DEF_DB);
        $result = $shad_backend_sql->query("SELECT * FROM nieuws LIMIT 0,30");
        
        if (empty($_GET['from_article'])) {
          if ($result->num_rows >= 10) {
            $show_from = 0;
            $show_till = 10;
          } else {
            $show_from = 0;
            $show_till = $result->num_rows;
          }
        } else {
          $show_from = intval($_GET['from_article']);
          if ($result->num_rows >= $show_from + 10) {
            $show_till = $show_from + 10;
          } else {
            $show_till = $result->num_rows - $show_from;
          }
        }
            
        for ($i = $show_from; $i < $show_till; $i++) {
          $row = $result->fetch_assoc();
          echo '<div class="col-sm-12 col-md-12 col-lg-6">
          <div class="panel">
          <div class="panel-heading">
          <h3>' . $row["title"] . '</h3>
          </div>
          <div class="panel-body">' .
          $row["html"] .
          '<br><br>
          <i>Geschreven op: ' . $row["creationDate"] . '</i>
          </div>
          </div>
          </div>';
        }
        
        ?>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <?php
          if ($show_till < $result->num_rows && $show_from == 0) {
            echo '<button type="button" class="btn btn-default" onclick="window.location.href=' . "'nieuws.php?from_article=" . $show_till + 1 . "'>Volgende</button>";      
          } else if ($show_from != 0 && $show_till < $result->num_rows) {
            echo '<div class="btn-group" role="group">';
            echo '<button type="button" class="btn btn-default" onclick="window.location.href=' . "'nieuws.php?from_article=" . $show_from - 10 . "'>Vorige</button>";
            echo '<button type="button" class="btn btn-default" onclick="window.location.href=' . "'nieuws.php?from_article=" . $show_till + 1 . "'>Volgende</button>";
            echo '</div>';
          } else if ($show_till == $result->num_rows && $show_from != 0)  {
            echo '<button type="button" class="btn btn-default" onclick="window.location.href=' . "'nieuws.php?from_article=" . $show_from - 10 . "'>Vorige</button>";
          }
          ?>
        </div>
      </div>
      <!-- footer include -->
      <?php include 'include/footer.php'; ?>
    </div>
  </body>
</html>
