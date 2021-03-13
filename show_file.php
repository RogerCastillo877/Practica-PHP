<?php
define('__IMG', 1);
define('__PDF', 2);

$type = isset($_GET['type']) ? $_GET['type'] : '';
$download = isset($_GET['download']) ? true : false;

switch ($type) {
	case __IMG:
		header('Content-type:image/jpeg');
		if( $download )
		{
			header('Content-type: application/octet-stream');
			header('Content-Disposition:inline;filename=imagen.jpg');
		}
		$file = 'valencia.jpg';
		break;
	case __PDF:
		header('Content-type: application/pdf');
		if( $download )
		{
			header('Content-type: application/octet-stream');
			header('Content-Disposition:inline;filename=pdf_generico.pdf');
		}
		$file = 'generic.pdf';
		break;
	
}
$cont = file_get_contents($file);
echo $cont;