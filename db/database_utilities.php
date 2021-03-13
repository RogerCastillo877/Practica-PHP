<?php
require_once('database_credentials.php');
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$result = '';

if( $mysqli->connect_errno )
{
	echo 'Error en la conexión';
	exit;
}

function run_query()
{
	global $mysqli, $result;
	$sql = 'SELECT * FROM user';
	return $mysqli->query($sql);

}

function add( $email, $password )
{
	global $mysqli;
	$sql = "INSERT INTO user (id, email, password) VALUES (null, '{$email}','{$password}')";
	$mysqli->query($sql);

}

function update( $id, $email, $password )
{
	global $mysqli;
	$sql = "UPDATE user SET email = '{$email}', password = '{$password}' WHERE id = {$id}";
	$mysqli->query( $sql );

}

function delete( $id )
{
	global $mysqli;
	$sql = "DELETE FROM user WHERE id = {$id}";
	$mysqli->query($sql);
}

function get_user_by_id( $id )
{
	global $mysqli;
	$sql = "SELECT * FROM user WHERE id = {$id}";
	$result = $mysqli->query($sql);
	if( $result->num_rows )
		return $result->fetch_assoc();
	return false;

}

function get_users()
{
	global $mysqli, $result;
	$sql = 'SELECT * FROM user_access';
	return $mysqli->query($sql);

}

function get_user_data_by_email( $email )
{
	global $mysqli;
	$sql = "SELECT * FROM user_access WHERE email ='{$email}'";
	$result = $mysqli->query($sql);
	return $result->fetch_assoc();

}

function get_user_data_by_id( $id )
{
	global $mysqli, $result;
	$sql = "SELECT * FROM user_access WHERE id = '{$id}' ";
	$result = $mysqli->query($sql);
	return $result->fetch_assoc();
}

function get_articles()
{
	global $mysqli, $result;
	$sql = 'SELECT articles.*, user_access.email FROM articles, user_access WHERE articles.owner = user_access.id';
	return $mysqli->query($sql);

}

function get_articles_by_user( $id_user )
{
	global $mysqli, $result;
	$sql = 'SELECT * FROM articles WHERE owner = ' . $id_user;
	return $mysqli->query($sql);

}

function get_article_details( $id )
{
	global $mysqli, $result;
	$sql = 'SELECT * FROM articles WHERE id = ' . $id;
	$query =  $mysqli->query($sql);
	return $query->fetch_assoc();

}

function delete_article( $id_article )
{
	global $mysqli, $result;
	settype($id_article, 'integer');
	$sql = 'DELETE FROM articles WHERE id=' . $id_article;
	return $mysqli->query($sql);
}

function update_user_address($id_user, $address)
{
	global $mysqli, $result;
	$sql = "UPDATE user_access SET address='{$address}' WHERE id = {$id_user}";
	$mysqli->query($sql);
}

function update_article($id, $title, $text)
{
	global $mysqli, $result;
	$title_sanitized = filter_var($title,FILTER_SANITIZE_SPECIAL_CHARS);
	$sql = "UPDATE articles SET title='{$title_sanitized}', text='{$text}' WHERE id = {$id}";
	$mysqli->query($sql);
}
