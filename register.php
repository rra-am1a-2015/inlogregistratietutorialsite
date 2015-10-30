<?php
	//var_dump($_POST);
	include("db_connect.php");
	
	//var_dump($_POST);
	
	$query = "INSERT INTO `users` (`id`,
								   `firstname`,
								   `infix`,
								   `lastname`,
								   `email`,
								   `activation`) 
			  VALUES 			  (NULL,
								   '".$_POST["firstname"]."',
								   '".$_POST["infix"]."',
								   '".$_POST["lastname"]."',
								   '".$_POST["email"]."',
								   'false');";
	//echo $query;exit();
	
	$result = mysqli_query($connection, $query);
	
	$last_id = mysqli_insert_id($connection);
	
	//var_dump($result);
	
	if ( $result )
	{
		// Succesmelding en een redirect naar homepage
		$emailaddress = $_POST["email"];
		$subject = "Activateer uw account voor inlogregistratietutorialsite";
		$message = "<html>
						<head>
							<style>
								body
								{
									font-size:12px;
									color: black;
								}
							</style>
						</head>
						<body>		
						Bedankt voor het registreren, klik <a href='http://localhost/2015-2016/blok1/am1a/inlogregistratietutorialsite/index.php?content=activate&id=".$last_id."'>hier</a> om uw account te activeren. 
						</body>
					</html>";
		
		$headers = "From: adruijter@gmail.com\r\n";
		$headers .= "Cc: hsok@mboutrecht.nl, gft@mboutrecht.nl\r\n";
		$headers .= "Bcc: gnb@mboutrecht.nl, hpl@mboutrecht.nl\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8";
		
		
		mail($emailaddress, $subject, $message, $headers);
		echo "Uw gegevens zijn correct door ons ontvangen. U ontvangt een bevestigings e-mail met daarin een activatielink. Voor het kunnen inloggen is het nodig dat u uw account op deze manier activeert. U wordt doorgestuurd naar de homepage.";
		header("refresh:6; url=index.php?content=homepage");
	}
	else
	{
		echo "foutmelding. Neem contact op met info@inlogregistratietutorialsite.nl. Uw gegevens zijn niet door ons ontvangen. U wordt doorgestuurd naar de homepage.";
		header("refresh:5; url=index.php?content=homepage");
	}
	
	/* Huiswerk voor 26 oktober 8:45 afmaken
	 * Zorg dat de formuliergegevens goed weggeschreven staan in de database
	 * en maak de if else $result hierbovenstaand werkend.
	 */
?>