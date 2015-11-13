<?php
	if (!isset($_SESSION["id"]))
	{
		echo "U bent niet ingelogd en daarom heeft u geen rechten op deze pagina. U wordt doorgestuurd naar de algemene startpagina";
		header("refresh:3; url=index.php?content=homepage");
		exit();
	}
	else if ($_SESSION["activation"] ==  'false')
	{
		echo "Uw account is nog niet geactiveerd. Kijk in uw mailbox naar de mail met activatielink. U wordt doorgestuurd naar de algemene startpagina";
		session_unset();
		session_destroy();
		header("refresh:5;url=index.php?content=homepage");
		exit();
	}
	else if (!($userrole == $_SESSION["userrole"]))
	{
		echo "U beschikt niet over de juiste gebruikersrol voor deze pagina. U wordt doorgestuurd naar de algemene homepage.";
		header("refresh:4;url=index.php?content=homepage");
		exit();	
	}
	else
	{
		
	}
?>