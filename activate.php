<?php
	include("db_connect.php");
	
	$query = "UPDATE 	`users`
			  SET 		`activation` = 'true'
			  WHERE 	`id` = ".$_GET["id"].";";
			  
	$result = mysqli_query($connection, $query);
	
	//var_dump($result);
	
	if ($result)
	{
		echo "Uw account is geactiveerd. Kies een wachtwoord van minimaal 8 tekens.";
?>
	<form class="table" action="" method="post">
		<table>
			<tr>
				<td>kies een wachtwoord</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>type uw gekozen wachtwoord nogmaals</td>
				<td><input type="password" name="check_password"></td>
			</tr>
			<tr>
				<td></td>
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
?>