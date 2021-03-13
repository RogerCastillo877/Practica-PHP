<?php 
include_once('utilities.php');

$name = isset( $_GET['new_value'] ) ? $_GET['new_value'] : '';
$_SESSION['name'] = $name;
header('Location: index.php');