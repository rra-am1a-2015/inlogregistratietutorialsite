<?php
	if ( isset($_POST["submit"]))
	{
		//var_dump($_POST);
		
		$result = strcmp($_POST["password"], $_POST["check_password"]);
		
		if ( $result == 0)
		{
			//echo "Ze zijn gelijk";
			// Schrijf het wachtwoord naar de tabel users
			include("db_connect.php");
			
			$query = "UPDATE 	`users`
					  SET		`password`	= '".md5($_POST["password"])."'
					  WHERE		`id`		= '".$_POST["id"]."';";
			
			//echo $query; exit();
			$result = mysqli_query($connection, $query);
			
			if ( $result )
			{
				echo "Uw password is succesvol gewijzigd. U wordt doorgestuurd naar de inlogpagina";
				header("refresh:4;url=index.php?content=login_form");
			}
			else
			{
				echo "Er is een probleem opgetreden met het instellen van uw wachtwoord. Neem contact op met systeembeheer via info@inlogregistratietutorialsite.php. U wordt doorgestuurd naar de startpagina";
				header("refresh:4;url=index.php?content=homepage");
			}
			
			
		}
		else
		{
			echo "U Wachtwoorden zijn niet gelijk. Probeer het nogmaals.";
			// Meld dat de wachtwoorden niet gelijk zijn en stuur door naar activate.php met het id!
			header("refresh:5;url=index.php?content=activate&id=".$_POST["id"]."&pw=".$_POST["pw"]);
		}
	
	}
	else
	{

		include("db_connect.php");
		
		$query = "SELECT	* 
				  FROM		`users`
				  WHERE		`id` =			'".$_GET["id"]."'
				  AND		`password` =	'".$_GET["pw"]."'";
				  
		$result = mysqli_query($connection, $query);
		
		if ( mysqli_num_rows($result) > 0 )
		{
		
			$query = "UPDATE 	`users`
					  SET 		`activation` = 'true'
					  WHERE 	`id` = ".$_GET["id"].";";
					  
			$result = mysqli_query($connection, $query);
			
			//var_dump($result);
			
			if ($result)
			{
				echo "<h3>Uw account is geactiveerd. Kies een wachtwoord van minimaal 8 tekens.</h3><br>";
		?>
			<form class="table" action="index.php?content=activate" method="post">
				<table>
					<tr>
						<td>kies een wachtwoord</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td>type nogmaal uw wachtwoord</td>
						<td><input type="password" name="check_password"></td>
					</tr>
					<tr>
						<td>
							<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
							<input type="hidden" name="pw" value="<?php echo $_GET["pw"]; ?>">
						</td>
						<td><input type="submit" name="submit"></td>
					</tr>
				</table>
			</form>
		<?php
				//echo "U wordt doorverwezen naar de inlogpagina.";
				//header("refresh:5;url=index.php?content=login_form");
			}
			else
			{
				echo "Uw account is niet geactiveerd. Neem contact op met systeembeheer via info@inlogregistratietutorialsite.nl. U wordt doorverwezen naar de homepage";
				header("refresh:4;url=homepage");
			}
		}
		else
		{
			echo "U bent niet bevoegd om deze pagina te bekijken. U wordt doorgestuurd naar de startpagina";
			header("refresh: url=index.php?content=homepage");		
		}
	}
?>