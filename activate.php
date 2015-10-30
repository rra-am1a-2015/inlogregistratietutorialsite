<?php
	if ( isset($_POST["submit"]))
	{
		var_dump($_POST);
		
		$result = strcmp($_POST["password"], $_POST["check_password"]);
		
		if ( $result == 0)
		{
			echo "Ze zijn gelijk";
			// Schrijf het wachtwoord naar de tabel users
		}
		else
		{
			echo "Wachtwoorden zijn ongelijk";
			// Meld dat de wachtwoorden niet gelijke en stuur door naar activate.php met het id!
		}
	
	}
	else
	{


	include("db_connect.php");
	
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
				<td><input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>"></td>
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
?>