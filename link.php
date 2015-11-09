<a href="index.php?content=homepage">home</a>


<?php
	if ( isset($_SESSION["id"]))
	{
		echo "<a href='index.php?content=developer_homepage'>dev-home</a> ";
		echo "<a href='index.php?content=logout'>uitloggen</a>";
		
	}
	else
	{
		echo "<a href='index.php?content=login_form'>inloggen</a> ";
		echo "<a href='index.php?content=register_form'>registreer</a>";
	}
?>