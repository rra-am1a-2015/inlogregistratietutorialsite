<?php
	if (!isset($_SESSION["id"]))
	{
		echo "U bent niet ingelogd en daarom heeft u geen rechten op deze pagina. U wordt doorgestuurd naar de algemene startpagina";
		header("refresh:3; url=index.php?content=homepage");
		exit();
	}
	else
	{
		echo "<h4>Welkom: ".$_SESSION["firstname"]." ".$_SESSION["infix"]." ".$_SESSION["lastname"]."</h4><br>Je bent ingelogd.";
	}
?>