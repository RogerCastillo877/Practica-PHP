<?php
include('number_repo.php');
define('EN',0);
define('ES',1);
define('FR',0);
function say_five( $lang_index )
{
	global $lang;
	echo $lang[$lang_index];
}

say_five(FR);
