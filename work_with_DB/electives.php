<?php 
	require_once('db_connection.php');
	require_once('functions.php');
	
	$path = $_SERVER['PHP_SELF'];
	$path = explode('/',$path);
	$id =  end($path) != "electives.php" ? end($path) : null;
	
	echo showElectives($connection);
	updateItem($id,$_GET,$connection); // for update you need to use $_GET
	
	
	$connection = null;
?>