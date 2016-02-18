<?php
	include("../../db_connect.php");
	$query = "INSERT INTO `etenswaren` (`id`,
										`broodbeleg`)
								VALUES (NULL,
										'".$_POST["input"]."')";
										
	mysqli_query($connection, $query);
	echo $_POST["input"];
?>