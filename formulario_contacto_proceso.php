<?php
require_once('utilities.php');
require_once('header.php'); 

//debug($_POST);
//debug($_GET);
//debug($_REQUEST);
$name = isset( $_POST['name'] ) ? $_POST['name'] : '';
$language = isset( $_POST['language'] ) ? $_POST['language'] : '';
$urgent = isset( $_POST['urgent'] ) ? $_POST['urgent'] : '';
$news = isset( $_POST['news'] ) ? $_POST['news'] : '';


?>
<div class="row">
	<div class="large-9 columns">
<?php
echo "Hola {$name}, en {$languages[$language]}.<br/> ";
$is_urgent = $urgent == 1 ? 'es' : 'no es';
echo "Su llamada {$is_urgent} urgente<br/>";
echo "Usted quiere recibir noticias de: <br/>";

if( count($news) )
{
	foreach( $news as $news_single )
	{
		echo $news_single . "<br/>";
	}
}

?>
	</div>
</div>
<?php


require_once('footer.php'); 