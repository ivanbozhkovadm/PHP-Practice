<?php 

$data = array(
	'webgl' => array(
		'title' =>  'Компютърна графика с WebGL',
		'description' => '...',
		'lecturer' => 'доц. П. Бойчев',
	),
	'go' => array(
		'title' => 'Програмиране с Go',	
		'description' => '...',
		'lecturer' => 'Николай Бачийски',
	)
);


function show_page($courseName,$data){
	$result = ' ';
	
	$result =  $result."<h1> ".$data[$courseName]['title'] ."</h1>";
	$result =  $result."<h2> ".$data[$courseName]['lecturer']." </h2>";
	$result =  $result."<p> ".$data[$courseName]['description']." </p>";
	
	/*foreach($data[$courseName] as $key => $value){
		switch($key){
			case 'title' :$result =  $result."<h1> $value </h1>";break;
			case 'lecturer': $result =  $result."<h2>$value</h2>" ; break;
			case 'description':$result = $result."<p>$value</p>"; break;
		}
	} */
	return $result;
}
function  show_nav($data, $courseName){
	return 	'<a href="?page='.$courseName.'">'.$data[$courseName]['title'].'</a> ';
}

function menu($data){
	foreach($data as $key => $value){
		echo show_nav($data, $key);
	}
}

//echo show_nav($data,'webgl');


menu($data);


if($_GET){
$page = $_GET['page'];
echo show_page($page,$data);
}
else{
echo "<p>Izberete disciplina</p>";
}

//echo 	$data['webgl']

?>