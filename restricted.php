<?php
include_once('utilities.php');
include_once('db/database_utilities.php');
/*if(empty($_SESSION['name'])){
  header('Location: index.php');
  die();
}*/
if( !isset( $_SESSION['uid'] ) )
{


  header('Location: index.php');
  die();

}

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Práctica PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

     
    <div class="row">
 
      <!-- <div class="large-9 columns">
        <h3>Página protegida</h3>
          <p>Hola, <!<?php echo isset( $_SESSION['name'] ) ? $_SESSION['name'] : 'Invitado'; ?></p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
               <a href="#" class="alert button radius">Contenido protegido</a>
               <pre><?php debug($_SESSION); ?></pre>
              </div>
            </div>
          </section>
        </div>
      </div> -->

      <div class="large-9 columns">
        <h3>Manejo de base de datos</h3>
          <p>Reestringida</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>