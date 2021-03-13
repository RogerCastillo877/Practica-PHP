<?php
include_once('utilities.php');
include_once('db/database_utilities.php');
if( !isset( $_SESSION['uid'] ) )
{
  header('Location: index.php');
  die();

}
$user_id = $_SESSION['uid'];


if( $_POST )
{
  $address = isset( $_POST['address'] ) ? $_POST['address'] : '';
  update_user_address($user_id, $address);
}

$user_data = get_user_data_by_id( $user_id );
$result = get_articles();

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
                          <b><?php echo $user_data['email'] ?></b>
                        </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="large-6 columns">
                        <label>Dirección
                          <textarea name="address" id="txaAddress"><?php echo $user_data['address'] ?></textarea>
                        </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="large-6 columns">
                        <input type="submit" class="button success tiny" value="MODIFICAR" />
                      </div>
                    </div>
                  </form>
                  <div class="row">
                    <div class="large-12 columns">
                       <table width="100%">
                        <thead>
                          <tr>
                            <th width="100">Nombre</th>
                            <th width="500">Texto</th>
                            <th width="300">Acción</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          while($user = $result->fetch_assoc())
                          {
                          ?>
                          <tr>
                            <td><?php echo utf8_decode($user['title']); ?></td>
                            <td><?php echo utf8_decode($user['text']); ?></td>
                            <td>
                              <?php if( $user['owner'] == $user_id ){ ?>
                              <a href="./article_details.php?id=<?php echo $user['id']; ?>" class="button tiny">Ver detalles</a>
                              <a href="./delete.php?id=<?php echo $user['id']; ?>" class="button tiny alert">Delete</a>
                              <?php }else{ ?>
                              Sin acción
                              <?php } ?>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="3"><hr/></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>                  
              </div>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>