<?php
session_start();
$languages[] = 'Español';
$languages[] = 'English';
$languages[] = 'Français';
function debug( $value )
{
	echo '<pre>';
	var_dump($value);
	echo '</pre>';
}
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

//  Ejemplos fechas
$user_access[] = [
  'email' => 'bernardo@correo.com',
  'name' => 'Bernardo Granados',
  'country' => 'México',
  'phone' => '12345'

];
$user_access[] = [
  'email' => 'sergio@correo.com',
  'name' => 'Sergio Pineda',
  'country' => 'México',
  'phone' => '67890'

];
$user_access[] = [
  'email' => 'francisco@correo.com',
  'name' => 'Francisco Brito',
  'country' => 'México',
  'phone' => '24680'

];