<?php 

require_once('validator.php');
if ($_POST) {
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
		
		"credits" => [
			"int" =>true,
			"required" =>true
		],
	];
	
	$validate = new Validator($_POST, $requirements);
	$errors = $validate->validate();
	if($errors){
		foreach($errors as $value){
			echo "<p> $value </p>";
		}
	} else{
		echo "<h1> Успещно добавихте нов курс!</h1>";
	}
}

?>