<?php
include_once('utilities.php');
$tech_support_available = true;
$languages[] = 'Español';
$languages[] = 'Inglés';
$languages[] = 'Francés';
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
      <div class="large-12 columns">
        <div class="panel">
          <h4>Soporte técnico disponible</h4>
          <div class="row">
            <div class="large-12 columns">
              <?php echo availability( $tech_support_available ) ; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

     
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Contáctanos</h3>
          <p>Nos encantaría ponernos en contacto contigo. Envíanos comentarios y sugerencias a través del siguiente formulario.</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a href="#panel1">Contact nuestra compañía</a></h5>
            <div class="content" data-slug="panel1">
              <form action="formulario_contacto_proceso.php" method="get">
                <div class="row collapse">
                  <div class="large-2 columns">
                    <label class="inline">Idioma</label>
                  </div>
                  <div class="large-10 columns">
                    <select name="language">
                      <?php 
                      $i = 0;
                      while( $i < count( $languages ) ){ 
                        ?>
                      <option value="<?php echo $i; ?>"><?php echo $languages[$i]; ?></option>
                      <?php 
                      $i++;
                      } ?>
                    </select>
                  </div>
                </div>
                <button type="submit" class="radius button">Enviar</button>
              </form>
            </div>
          </section>
        </div>
      </div>
    <footer class="row">
      <div class="large-12 columns">
        <hr/>
        <div class="row">
          <div class="large-6 columns">
            <p>&copy; Copyright <?php echo say_year(); ?>.</p>
          </div>
          <div class="large-6 columns">
            <ul class="inline-list right">
              <li><a href="./arreglos_sencillos.php">Inicio</a></li>
              <li><a href="#">Contacto</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script>
      document.write('<script src=./js/vendor/' +
      ('__proto__' in {} ? 'zepto' : 'jquery') +
      '.js><\/script>')
    </script>
    <script src="./js/zepto.js"></script>
    <script src="./js/vendor/jquery.js"></script>
    <script src="./js/foundation.min.js"></script>
    <script>
        $(document).foundation();
    </script>
    <script src="./js/vendor/jquery.js"></script>
    <script src="./js/foundation/foundation.js"></script>
    <script>
          $(document).foundation();

          var doc = document.documentElement;
          doc.setAttribute('data-useragent', navigator.userAgent);
        </script>
  </body>
</html>