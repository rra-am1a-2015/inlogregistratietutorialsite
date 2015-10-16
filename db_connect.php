<?php
	$servername = "localhost";
	$username = "adruijter";
	$password = "geheim";
	$dbname = "am1a_2015_loginregistration";
	
	$connection = mysqli_connect($servername, $username, $password, $dbname) or die("Fout geen server-verbinding".mysqli_error($connection));
?>