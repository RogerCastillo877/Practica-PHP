<?php
include_once('utilities.php');
include_once('db/database_utilities.php');

if( $_POST )
{

  $email = isset( $_POST['email'] ) ? $_POST['email'] : '';
  $password = isset( $_POST['password'] ) ? $_POST['password'] : '';

  $user_data = get_user_data_by_email( $email );

  if( password_verify( $password, $user_data['password'] ) )
  {

    $_SESSION['uid'] = $user_data['id'];
    //header('Location: restricted.php');
    header('Location: profile.php');
    die();

  }else
  {
    die('Datos incorrectos');
  }
}

?>
<!doctype html>
<html class="no-js" lang="es">
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
        <h3>Manejo de base de datos</h3>
          <p>Artículos</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
                <form method="post">
                  <div class="row">
                    <div class="large-6 columns">
                      <label>Usuario
                        <input type="text" name="email"  />
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="large-6 columns">
                      <label>Contraseña
                        <input type="password" name="password"  />
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="large-6 columns">
                      <input type="submit" class="button success tiny" value="ENTRAR" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>