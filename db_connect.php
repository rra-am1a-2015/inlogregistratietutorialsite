<?php

$database_select = 0;

	switch ($database_select)
	{
		case 0:
			$servername = "localhost";
			$username = "adruijter";
			$password = "geheim";
			$dbname = "am1a_2015_loginregistration";
			break;
		case 1:
			$servername = "mysql.hostinger.nl";
			$username = "u905009722_rra";
			$password = "";
			$dbname = "u905009722_am1a";
			break;
	}
	
	
	$connection = mysqli_connect($servername, $username, $password, $dbname) or die("Fout geen server-verbinding".mysqli_error($connection));
?>