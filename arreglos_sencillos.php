<?php
function availability( $is_available )
{
  if( $is_available  )
                {
                  echo 'Si';
                }else
                {
                  echo 'No';
                }
}

function say_year()
{
  return date('Y');
}

$user_data = [];
$user_data['name'] = 'Steve Wozniak';
$user_data['age'] = 65;
$user_data['compnay'] = 'Apple';
$user_data['availability'] = true;

$famous_tech_people[] = [ 
    'name' => 'Steve Jobs',
    'address' => 'Cupertino, CA',
    'availability' => false,
    'email' => 'steve@apple.com'
 ];

 $famous_tech_people[] = [ 
    'name' => 'Bill Gates',
    'address' => 'Reston, VA',
    'availability' => true,
    'email' => 'bill@ms.com'
 ];

 $famous_tech_people[] = [ 
    'name' => 'Linus Torvalds',
    'address' => 'Suecia',
    'availability' => true,
    'email' => 'linus@linux.com'
 ];

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
          <li><a href="./formulario_contacto.php" class="button">Contacto</a></li>
        </ul>
      </div>
    </div>
     
    <div class="row">
      <div class="large-12 columns">
        <h4>Hola</h4>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
      </div>
    </div>
     
    <div class="row">
      <div class="large-12 columns">
        <div class="panel">
          <h4>Contenido del arreglo</h4>
          <div class="row">
            <div class="large-12 columns">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <table width="100%">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Dirección</th>
              <th>Correo electrónico</th>
              <th>Disponible</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($famous_tech_people as $person){ ?>
            <tr>
              <td><?php echo $person['name'] ?></td>
              <td><?php echo $person['address'] ?></td>
              <td><?php echo $person['email'] ?></td>
              <td>
                <?php 
                availability( $person['availability'] );
                ?>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
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
              <li><a href="#">Inicio</a></li>
              <li><a href="./formulario_contacto.php">Contacto</a></li>
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