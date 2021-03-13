<?php
$name = 'Gustavo Cerati';
$age = 25;
$has_kids = false;
define('__COUNTRY', 'Argentina');
$hourly_rate = 59.99;
$partner = new stdClass();
$partner->name = 'Charly Alberti';
$partner->age = 21;
?><!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="row">
      <div class="large-3 columns">
        <h1><img src="./img/logo.png"/></h1>
      </div>
      <div class="large-9 columns">
        <ul class="right button-group">
          <li><a href="#" class="button">Inicio</a></li>
          <li><a href="#" class="button">Artículos</a></li>
          <li><a href="#" class="button">Contacto</a></li>
        </ul>
      </div>
    </div>
     
    <div class="row">
      <div class="large-12 columns">
        <img src="./img/calatrava_400x300.jpg"/>
        <h4>Subtítulo</h4>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
      </div>
    </div>
     
    <div class="row">
      <div class="large-6 columns">
        <div class="panel">
          <h4>Datos del usuario</h4>
          <div class="row">
            <div class="large-4 columns">
              <b>Nombre</b>
            </div>
            <div class="large-4 columns">
              <?php echo $name; ?>
            </div>
            <div class="large-4 columns">
              &nbsp;
            </div>
          </div>

          <div class="row">
            <div class="large-4 columns">
                <b>Edad</b>
              </div>
              <div class="large-4 columns">
                <?php echo $age; ?>
              </div>
              <div class="large-4 columns">
                &nbsp;
              </div>
          </div>

          <div class="row">
            <div class="large-4 columns">
                <b>¿Tiene hijos?</b>
              </div>
              <div class="large-4 columns">
                <?php echo $has_kids ? 'Si' : 'No'; ?>
              </div>
              <div class="large-4 columns">
                &nbsp;
              </div>
          </div>

          <div class="row">
            <div class="large-4 columns">
                <b>Costo por hora</b>
              </div>
              <div class="large-4 columns">
                $<?php echo $hourly_rate; ?> USD
              </div>
              <div class="large-4 columns">
                &nbsp;
              </div>
          </div>

          <div class="row">
            <div class="large-4 columns">
                <b>País</b>
              </div>
              <div class="large-4 columns">
                <?php echo __COUNTRY; ?>
              </div>
              <div class="large-4 columns">
                &nbsp;
              </div>
          </div>

          <div class="row">
            <div class="large-4 columns">
                <b>Socio</b>
              </div>
              <div class="large-4 columns">
                <?php echo $partner->name; ?>
              </div>
              <div class="large-4 columns">
                &nbsp;
              </div>
          </div>
          <div class="row">
            <div class="large-4 columns">
                <b>Edad del socio</b>
              </div>
              <div class="large-4 columns">
                <?php echo $partner->age; ?>
              </div>
              <div class="large-4 columns">
                &nbsp;
              </div>
          </div>


        </div>
      </div>
    </div>
     
    <footer class="row">
      <div class="large-12 columns">
        <hr/>
        <div class="row">
          <div class="large-6 columns">
            <p>&copy; Copyright 2015.</p>
          </div>
          <div class="large-6 columns">
            <ul class="inline-list right">
              <li><a href="#">Inicio</a></li>
              <li><a href="#">Artículos</a></li>
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