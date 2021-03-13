<?php
include_once('utilities.php');
$d = dir("./uploads");
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
        <h3>Listado de imágenes cargadas</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a href="#panel1">Uploads</a></h5>
            <div class="content" data-slug="panel1">
            	<table width="100%">
				  <thead>
				    <tr>
				      <th width="200">Imagen</th>
				      <th>Nombre del archivo</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	while (false !== ($entry = $d->read())) 
				  	{
				  		if( $entry != '.' && $entry != '..' )
				  		{
				  	?>
				    <tr>
				      <td><img src="uploads/<?php echo $entry; ?>" width="100" /></td>
				      <td><?php echo $entry; ?></td>
				    </tr>
				    <?php 
				    	}
					} 
					?>
				  </tbody>
				</table>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>