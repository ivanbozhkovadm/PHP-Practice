<?php 
	$host = "localhost";
	$db = "web_technologies";
	$username = "root";
	$password = "";

	$connection = new PDO("mysql:host=$host;dbname=$db",$username, $password);
	
	//add new collumn
	$addField = "IF NOT EXISTS( SELECT NULL
				FROM INFORMATION_SCHEMA.COLUMNS
				WHERE table_name = 'electives' AND table_schema = \"$db\" AND column_name = 'created_at')  THEN
				ALTER TABLE electives ADD `created_at` VARCHAR(200);
		END IF";
	$query = $connection->query($addField) or die("<h2>failed add new field</h2>");
?>