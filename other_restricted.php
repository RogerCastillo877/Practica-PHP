<?php
include_once('utilities.php');
if(empty($_SESSION['name'])){
  header('Location: index.php');
  die();
}
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
        <h3>Página protegida</h3>
          <p>Hola, <?php echo isset( $_SESSION['name'] ) ? $_SESSION['name'] : 'Invitado'; ?></p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
               <a href="#" class="disabled button radius">Contenido protegido</a>
              </div>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>