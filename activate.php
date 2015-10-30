<?php
	echo "Ik ga jouw activeren...";
	
	include("db_connect.php");
	
	$query = "UPDATE 	`userssldfkjslkfsjlkjlksjflskjdfl`
			  SET 		`activation` = 'true'
			  WHERE 	`id` = ".$_GET["id"].";";
			  
	$result = mysqli_query($connection, $query);
	
	var_dump($result);
	
	echo $query; exit();
?>