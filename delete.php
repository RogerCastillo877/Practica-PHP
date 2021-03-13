<?php
include_once('utilities.php');
include_once('db/database_utilities.php');

header('Location: index.php');
$id = isset( $_GET['id'] ) ? $_GET['id'] : 0;
delete( $id );

delete_article( $id );
header('Location: profile.php');