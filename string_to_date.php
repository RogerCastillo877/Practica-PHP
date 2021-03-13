<?php
include_once('utilities.php');
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
        <h3>Conversión de cadenas</h3>
          <p>Datos de una fecha</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <ul class="pricing-table">
                <li class="title">Otros días</li>
                <li class="price"><?php echo date('d-m-Y', strtotime('yesterday')); ?></li>
                <li class="description">Hoy: <?php echo date('d-m-Y',strtotime('now')); ?></li>
                <li class="bullet-item"><?php echo date('d-m-Y', strtotime('tomorrow')); ?></li>
                <li class="bullet-item"><?php echo date('d-m-Y', strtotime('+1 week')); ?></li>
              </ul>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>