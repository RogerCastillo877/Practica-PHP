<?php
include_once('utilities.php');
$tech_support_available = true;
$new_content = isset( $_POST['content'] ) ? $_POST['content']: '';
file_put_contents('config.txt', $new_content);
$content = file_get_contents('config.txt');
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
        <h3>Modificación de archivo</h3>
          
        <div class="section-container tabs" data-section>
          <section class="section">
            <div data-alert class="alert-box success radius">
			  Archivo modificado.
			  <a href="#" class="close">&times;</a>
			</div>
            <div class="content" data-slug="panel1">
                <div class="row collapse">
                  <div class="large-12 columns">
                    <pre><?php echo $content; ?></pre>
                  </div>
                </div>
                <a href="./index.php" class="button secondary radius">Regresar</a>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>