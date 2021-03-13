<?php
$today = date('d/m/Y');
$name = "Roberto";
$last_name = "Gómez";
$url = "http://www.no_existe.com/";
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
        <h4>Título</h4>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
      </div>
    </div>
     
    <div class="row">
      <div class="large-12 columns">
        <div class="panel">
          <h4><?php echo $today; ?></h4>
          <div class="row">
            <div class="large-9 columns">
              <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo...</p>
            </div>
            <div class="large-3 columns">
              <a href="<?php echo $url; ?>" class="radius button right">Alguna Acción</a>
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
            <p>&copy; Copyright <?php echo $name; ?> <?php echo $last_name; ?> 2015.</p>
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