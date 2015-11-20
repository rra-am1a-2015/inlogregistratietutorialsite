<?php

$database_select = $_SERVER["HTTP_HOST"];

	switch ($database_select)
	{
		case "localhost":
			$servername = "localhost";
			$username = "adruijter";
			$password = "geheim";
			$dbname = "am1a_2015_loginregistration";
			break;
		case "rra-am1a-2015.esy.es":
			$servername = "mysql.hostinger.nl";
			$username = "u905009722_rra";
			$password = "Ezekkthoes1";
			$dbname = "u905009722_am1a";
			break;
	}
	
	
	$connection = mysqli_connect($servername, $username, $password, $dbname) or die("Fout geen server-verbinding".mysqli_error($connection));
?>