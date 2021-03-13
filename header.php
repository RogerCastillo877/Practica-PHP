<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Práctica PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
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
  </head>
  <body>
<div class="row">
      <div class="large-3 columns">
        <h1><img src="./img/logo.png"/></h1>
      </div>
      <div class="large-9 columns">
        <ul class="right button-group">
          <li><a href="./index.php" class="button">Inicio</a></li>
          <?php if( !isset( $_SESSION['uid'] ) ){ ?>
          <li><a href="./login.php" class="button">Admin</a></li>
          <?php } ?>
          <?php if( isset( $_SESSION['uid'] ) ){ ?>
          <li><a href="./restricted.php" class="button">Reestringida</a></li>
          <li><a href="./profile.php" class="button">Perfil</a></li>
          <li><a href="./logout.php" class="button">Salir</a></li>
          <?php } ?>
          
          <li><a href="./image_list.php" class="button">Imágenes</a></li>
          <li><a href="./formulario_contacto.php" class="button">Contacto</a></li>
          <!-- Manejo de fechas y otras herramientas -->
          <li><a href="./date_examples.php" class="button">Fechas</a></li>
          <li><a href="./string_to_date.php" class="button">Conversiones</a></li>
          <li><a href="./random.php" class="button">Color</a></li>
          <li><a href="./list.php" class="button">Lista</a></li>
          <li><a href="./json1.php" class="button">JSON 1</a></li>
        </ul>
      </div>
    </div>