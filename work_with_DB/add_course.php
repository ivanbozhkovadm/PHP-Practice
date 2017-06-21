<?php 
require_once('validator.php');
require_once('functions.php');
require_once('db_connection.php');


if ($_POST) { // check for data
	
	//requirements for all the fields
	$requirements = [
		"title" => [
			"max" => 15,
			"required" => true
		],
		
		"lecturer" => [
			"max" => 200,
			"required" => true
		],
		
		"description" => [
			"min" => 10,
			"required" => true
		],
		
	];
	
	$validate = new Validator($_POST, $requirements);
	$result = $validate->validate(); 
	if($result["errors"]){
		foreach($result["errors"] as $value){
			echo "<p> $value </p>";
		}
	} else{
		add_to_table($connection,$result["data"]);
		header("Location:electives.php");
	}
}

$connection = null;
?>

