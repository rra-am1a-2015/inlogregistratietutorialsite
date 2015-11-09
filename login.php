<?php
	if ( empty($_POST["email"]) || empty($_POST["password"]))
	{ 
		echo "U heeft uw password of emailadres niet ingevuld. Probeer het nogmaals";
		header("refresh:2; url=index.php?content=login_form");
	}
	else
	{
		include("db_connect.php");
		
		$query = "SELECT	*
				  FROM		`users`
				  WHERE		`email`			= '".$_POST["email"]."'
				  AND		`password`		= '".MD5($_POST["password"])."';";
				  
		$result = mysqli_query($connection, $query);
		
		if ( mysqli_num_rows($result) > 0 )
		{
			// Meldt de gebruiker dat hij is ingelogd redirect naar homepage developer
			$record = mysqli_fetch_assoc($result);
			var_dump($record);
			$_SESSION["id"] = $record["id"];
			$_SESSION["firstname"] = $record["firstname"];
			$_SESSION["infix"] = $record["infix"];
			$_SESSION["lastname"] = $record["lastname"];
			$_SESSION["email"] = $record["email"];
			$_SESSION["activation"] = $record["activation"];
			$_SESSION["password"] = $record["password"];
			$_SESSION["userrole"] = $record["userrole"];
			
			switch ($_SESSION["userrole"])
			{
				case "root":
					header("location: index.php?content=root_homepage");
					break;
				case "administrator":
					header("location: index.php?content=administrator_homepage");
					break;
				case "customer":
					header("location: index.php?content=customer_homepage");
					break;
				case "developer":
					header("location: index.php?content=developer_homepage");
					break;
				default:
					header("location:index.php?content=homepage");
					break;
			}
			
		}
		else
		{
			// Meldt de gebruiker dat hij een niet bestaand emailadres en wachtwoordcombinatie heeft gebruikt. Stuur hem door naar de login_form.php pagina
			echo "Het door u ingevulde email en/of wachtwoord is niet bekend, log opnieuw in.";
			header("refresh:4;url=index.php?content=login_form");
		}
				  
		//echo $query; exit();
		// Maak contact met de server
		// Maak een query die op basis van email en password kijkt of het record bestaat
		// als het bestaat redirect naar de homepage van de developer
		// Als het niet bestaat melding account niet bekend probeer het opnieuw. Redirect naar
		// login_form
	
	}
	
	// Als een van de velden leeg is melden en redirecten naar login_form.php && (and)  || (or)
	// Als beide velden gevuld zijn melden we gaan verder.
?>