<?php
include_once('utilities.php');
$content = file_get_contents('data.txt');
$file_data = explode(',',$content);
//debug($file_data);
list($host,$user,$password,$code) = $file_data;
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

    <div class="row">
 
      <div class="large-9 columns">
        <h3>Manejo de variables</h3>
          <p>Funciones explode() y list()</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <ul class="pricing-table">
                <li class="title">Detalle de indice</li>
                <li class="description"><?php echo $host ?></li>
                <li class="description"><?php echo $user ?></li>
                <li class="description"><?php echo $password ?></li>
                <li class="description"><?php echo $code ?></li>
              </ul>
            </div>
          </section>
        </div>
      </div>
    </div>
     
    <?php require_once('footer.php'); ?>