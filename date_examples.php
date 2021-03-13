<?php
include_once('utilities.php');

//sunday
//leap
$user_access[] = [
    'email' => 'bernardo@correo.com',
    'last_access' => 1325718000
];
$user_access[] = [
    'email' => 'sergio@correo.com',
    'last_access' => 1446418800
];
$user_access[] = [
    'email' => 'francisco@correo.com',
    'last_access' => 1446850800
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
    
    <?php require_once('header.php'); ?>

     
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Ejemplos de fechas</h3>
          <p>Listado</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <table>
                <thead>
                  <tr>
                    <th width="200">ID</th>
                    <th>Correo</th>
                    <th width="150">Fecha</th>
                    <th width="150">Día de la semana</th>
                    <th width="150">Biciesto</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach( $user_access as $id => $user ){ ?>
                  <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo date( 'd-m-Y H:i', $user['last_access'] ); ?></td>
                    <td><?php echo date( 'D', $user['last_access'] ) ?></td>
                    <td><?php echo date( 'L', $user['last_access'] ) ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>