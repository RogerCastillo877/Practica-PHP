<?php
//die;
include_once('utilities.php');
$tech_support_available = true;
include_once('db/database_utilities.php');
$result = run_query();
// $user =$result->fetch_assoc();  //Se pasa dentro del while de la base de datos
//$user_access = [];
$total_users = count($user_access);
$email = isset( $_GET['email'] ) ? $_GET['email'] : '';
$content1 = file_get_contents('config.txt');
$content = file_get_contents("http://{$_SERVER['SERVER_NAME']}{$_SERVER['REQUEST_URI']}/json1.php");
//debug($content);
$product = json_decode($content,true);
//debug($product);
$price = $product['price'];
$result1 = get_articles();

// Cargar imágenes
$upload = false;
$upload_error = false;
$msg = '';
$msg_error = '';

//debug( $_FILES );
if( $_FILES )
{
  $uploads_directory = 'uploads/';
  $upload_file_copy = $uploads_directory . basename($_FILES['image']['name']);

  $image_file_type = pathinfo($upload_file_copy, PATHINFO_EXTENSION);

  if( $image_file_type == 'jpg' )
  {
    if( move_uploaded_file($_FILES['image']['tmp_name'], $upload_file_copy) )
    {
      $upload = true;
      $msg = 'El fichero fue cargado correctamente';
    }else{
      $upload = false;
      $upload_error = true;
      $msg_error = 'Error al cargar archivo';
    }
  }else{
      $upload = false;
      $upload_error = true;
      $msg_error = 'Tipo de fichero no permitido';
  }

}
?>
<!doctype html>
<html class="no-js" lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Práctica PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
    <!-- Cargar imágenes -->
    <style>
      .file-upload {
        position: relative;
        overflow: hidden;
        margin: 10px; 
      }

      .file-upload input.file-input {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0); 
      }
    </style>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

     
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Contáctanos</h3>
          <p>Nos encantaría ponernos en contacto contigo. Envíanos comentarios y sugerencias a través del siguiente formulario.</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a href="#panel1">Contact nuestra compañía</a></h5>
            <div class="content" data-slug="panel1">
              <form action="formulario_contacto_proceso.php" method="post">
                <div class="row collapse">
                  <div class="large-2 columns">
                    <label class="inline">Nombre</label>
                  </div>
                  <div class="large-10 columns">
                    <input type="text" name="name"  />
                  </div>
                </div>
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
                <div class="row collapse">
                  <div class="large-2 columns">
                    <label class="inline">Urgente</label>
                  </div>
                  <div class="large-10 columns">
                    <input type="radio" name="urgent" value="1" id="pokemonRed"><label for="pokemonRed">Si</label>
                    <input type="radio" name="urgent" value="0" id="pokemonBlue"><label for="pokemonBlue">No</label>
                  </div>
                </div>
                <div class="row collapse">
                  <div class="large-2 columns">
                    <label class="inline">¿Desea recibir noticias?</label>
                  </div>
                  <div class="large-10 columns">
                    <input id="checkbox1" type="checkbox" name="news[]" value="sitio"><label for="checkbox1">Del sitio</label>
                    <input id="checkbox2" type="checkbox" name="news[]" value="blog"><label for="checkbox2">Del blog</label>
                  </div>
                </div>
                <button type="submit" class="radius button">Enviar</button>
              </form>
            </div>
          </section>
        </div>
        
        <!-- Cómo cargar archivos a nuestro servidor web -->
        <h3>Carga de archivos</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a href="#panel1">Seleccione una imagen</a></h5>
            <?php if( $upload ){ ?>
            <div data-alert class="alert-box success radius">
              <?php echo $msg; ?>
              <a href="#" class="close">&times;</a>
            </div>
            <?php } ?>
            <?php if( $upload_error ){ ?>
            <div data-alert class="alert-box alert radius">
              <?php echo $msg_error; ?>
              <a href="#" class="close">&times;</a>
            </div>
            <?php } ?>
            <div class="content" data-slug="panel1">
              <form method="post" enctype="multipart/form-data">
                <div class="row collapse">
                  
                  <div class="large-10 columns">
                    <button class="file-upload">            
                      <input type="file" class="file-input" name="image">Elegir archivo
                    </button>

                  </div>
                </div>
                <button type="submit" class="radius button success ">Cargar</button>
              </form>
            </div>
          </section>
        </div>
        
        <!-- Cómo manipular el navegador con PHP y encabezados -->
        <h3>Manejo de archivos</h3>
          <p>Mostrar y descargar archivos</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
                <!--<img src="./show_file.php?type=1" />-->
               <a href="./show_file.php?type=1" class="button radius">Ver imagen</a>
               <a href="./show_file.php?type=2" class="button info radius">Ver PDF</a>
              </div>
              <div class="row">
                <!--<img src="./show_file.php?type=1" />-->
               <a href="./show_file.php?type=1&download=1" class="button radius">Descargar imagen</a>
               <a href="./show_file.php?type=2&download=1" class="button info radius">Descargar PDF</a>
              </div>
            </div>
          </section>
        </div>

        <!-- Interacción entre PHP y archivos -->
        <h3>Manejo de archivos</h3>
          <p>Modifica la configuración desde esta interfaz web</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a href="#panel1">config.txt</a></h5>
            <div class="content" data-slug="panel1">
              <form action="modify_file.php" method="post">
                <div class="row collapse">
                  <div class="large-12 columns">
                    <textarea name="content"><?php echo $content1; ?></textarea>
                  </div>
                </div>                
                <button type="submit" class="radius button">Modificar</button>
              </form>
            </div>
          </section>
        </div>

        <!-- Bloque de manejo de datos -->
        <h3>Manejo de base de datos</h3>
          <p>Listado</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
                <a href="./new_user.php" class="button tiny success">Nuevo</a>
              </div>
              <table>
                <thead>
                  <tr>
                    <th width="200">ID</th>
                    <th>Correo</th>
                    <th width="150">Contraseña</th>
                    <th width="350">Acción</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  while($user = $result->fetch_assoc())
                  {
                  ?>
                  <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['password']; ?></td>
                    <td>
                      <a href="./details.php?id=<?php echo $user['id']; ?>" class="button tiny secondary">Detalles</a>
                      <a href="./delete.php?id=<?php echo $user['id']; ?>" class="button tiny alert">Eliminar</a>
                    </td>
                    
                  </tr>
                  <?php
                }
                  ?>
                </tbody>
              </table>
            </div>
          </section>
        </div>
        
        <!-- Bloque de manejo de fechas -->
        <h3>Manejo de fechas</h3>
          <p>Datos de una fecha</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <ul class="pricing-table">
                <li class="title">Desglose</li>
                <li class="price"><?php echo date('d-m-Y h:i'); ?></li>
                <li class="description"><?php echo date('y'); ?></li>
                <li class="bullet-item"><?php echo date('t'); ?></li>
                <li class="bullet-item"><?php echo date('a'); ?></li>
                <li class="bullet-item"><?php echo date('H'); ?></li>
              </ul>
            </div>
          </section>
        </div>
        
        <!-- Bloque de ejemplos de fechas -->
        <h3>Ejemplos de fechas</h3>
          <p>Listado</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <?php if($total_users){ ?>
              <table>
                <thead>
                  <tr>
                    <th width="200">ID</th>
                    <th width="250">Nombre</th>
                    <th width="250">Correo</th>
                    <th width="250">Acción</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach( $user_access as $id => $user ){ ?>
                  <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><a href="./key.php?id=<?php echo $id; ?>" class="button radius tiny secondary">Ver detalles</a></td>
                  </tr>
                  <?php } ?>
                  <tr>
                    <td colspan="4"><b>Total de registros: </b> <?php echo $total_users; ?></td>
                  </tr>
                </tbody>
              </table>
              <?php }else{ ?>
              No hay registros
              <?php } ?>
            </div>
          </section>
        </div>
        
        <!-- Manejo y manipulación de variables con las funciones internas de PHP -->
        <h3>Ejemplo de isset()</h3>
        <?php if( !empty($email) ){ ?>
        <div data-alert class="alert-box success radius">
          Se ha agregado tu correo a nuestra base
          <a href="#" class="close">&times;</a>
        </div>
        <?php } ?>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <form>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Correo
                      <input type="text" name="email" value="<?php echo $email; ?>" placeholder="ej. correo@dominio.com" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-6 columns">
                    <label>¿Deseas recibir noticias?</label>
                    <input name="chkNews" type="checkbox" value="yes"><label for="checkbox1">Recibir</label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-6 columns">
                    <input type="submit" value="ENVIAR" class="button tiny radius success" />
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
        
        <!-- Manejo de formatos númericos y JSON -->
        <h3>Ejemplo de formato numérico</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <ul class="pricing-table">
                <li class="title">Standard</li>
                <li class="price">$<?php echo number_format($price, 2, '.',',') ?></li>
                <li class="description">Desarrollo de página dinámica</li>
                <li class="bullet-item">1 Base de datos</li>
                <li class="bullet-item">5 GB de almacenamiento</li>
                <li class="bullet-item">5 Usuario</li>
                <li class="cta-button"><a class="button" href="#">Compra ahora</a></li>
              </ul>
          </section>
        </div>

        <!-- PHP y sus constructores (no de objetos) de lenguaje 'echo', 'die', 'foreach'-->
        <h3>Ejemplo de constructores de lenguaje</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <ul class="pricing-table">
                <li class="title">Standard</li>
                <?php foreach( $product as $title => $value ) { ?>
                <li class="description"><?php echo $title ?> <?php echo $value ?></li>
                <?php } ?>
                <li class="cta-button"><a class="button" href="#">Compra ahora</a></li>
              </ul>
          </section>
        </div>

      </div>

      <div class="large-12 columns">
        <h3>Inicio</h3>
          <p>Listado de artículos generales</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
                <div class="large-12 columns">
                  <table width="100%">
                    <thead>
                      <tr>
                        <th width="100">Autor</th>
                        <th width="100">Nombre</th>
                        <th width="500">Texto</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      while($user = $result1->fetch_assoc())
                      {
                      ?>
                      <tr>
                        <td><?php echo utf8_decode($user['email']); ?></td>
                        <td><?php echo utf8_decode($user['title']); ?></td>
                        <td><?php echo utf8_decode($user['text']); ?></td>
                      </tr>
                      <tr>
                        <td colspan="3"><hr/></td>
                      </tr>
                      <?php
                    }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
        </div>
        
        <!-- Bloque Integración de PHP y JavaScript mediante jQuery --> 
        <h3>Hola <span id="spnUser">Invitado</span></h3>
        <div class="row">
          <a href="#" id="btnHTML" class="button tiny secondary">Cargar HTML</a>
          <a href="#" id="btnJSON" class="button tiny success">Cargar JSON</a>
        </div>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
                <div class="large-12 columns" id="divTable">
                  Contenido a cambiar
                </div>
              </div>
            </div>
          </section>
        </div>

      </div>
    

    <?php require_once('footer.php'); ?>