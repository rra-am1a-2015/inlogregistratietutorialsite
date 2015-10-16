<?php
	//var_dump($_POST);
	include("db_connect.php");
	
	$query = "INSERT INTO `users` (`id`,
								   `firstname`,
								   `infix`,
								   `lastname`,
								   `email`) 
			  VALUES 			  (NULL,
								   'Arjan',
								   'de',
								   'Ruijter',
								   'adruijter@gmail.com');";
								   
	$result = mysqli_query($connection, $query);
	
	if ( $result )
	{
		// Succesmelding en een redirect naar homepage
	}
	else
	{
		//foutmelding neem contact op met info@inlogregistratietutorialsite.nl redirect naar de homepage
	}
	
	echo MD5("ArjandeRuijter");
	
	/* Huiswerk voor 26 oktober 8:45 afmaken
	 * Zorg dat de formuliergegevens goed weggeschreven staan in de database
	 * en maak de if else $result hierbovenstaand werkend.
	 */
?>