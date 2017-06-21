<?php 
function showElectives($connection){

	//query to select all current data
	$select = "SELECT * from electives";
	$query = $connection->query($select) or die("<h2>failed showing the items of the table!</h2>");
	
	echo "<p>For updating item you should use get request --  maybe something like: <br> <br>
		http://localhost:8080/WebTechnologies/work_with_DB_61832/electives.php/<b>ID</b>?title=<b>something </b>
		</p>";
	//link for adding new course
	echo "<h1><a href=\"http://localhost:8080/WebTechnologies/work_with_DB_61832/\">Добавете нов курс</a></h1>";
	
	//create table with all data
	$table = "<table>";
	$table = $table."<tr><th>id</th><th>title</th><th>description</th><th>lecturer</th><th>created at</th> </tr>";
	
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$table = $table."<tr>";
			$table = $table."<td>".$row["id"]."</td>";
			$table = $table."<td>".$row["title"]."</td>";
			$table = $table."<td>".$row["description"]."</td>";
			$table = $table."<td>".$row["lecturer"]."</td>";
			$table = $table."<td>".$row["created_at"]."</td>";
		$table = $table."</tr>";
		
	}
	$table = $table."</table>";
	return $table;
}
	

function add_to_table($connection,$arguments){ //add new item to the db
	$title = $arguments['title'];
	$description = $arguments['description'];
	$lecturer = $arguments['lecturer'];
	$date = date("H:i, F j Y");
	
	$add = "INSERT INTO electives(title, description, lecturer,created_at) VALUES('$title','$description','$lecturer', '$date')";
	$query = $connection->query($add) or die("<h2>failed inserting new item!</h2>");
}

function updateItem($id,$newData,$connection){
	if($newData && $id){
		$update = "UPDATE electives SET";	
		foreach($newData as $key=>$value){
			$update = $update." $key = '$value'"; // take all properties and their values and put them in the query
			if(next($newData)){
				$update = $update.", ";
			}
		}
		$update = $update." WHERE id = '$id'";
		
		$query = $connection->query($update) or die("<h2>failed updating item</h2>");
		
		header("Location:../electives.php/");
	}
}

?>