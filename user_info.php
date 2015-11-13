<?php
	if (isset($_SESSION["id"]))
	{
		echo "<h4 id='left'>Welkom: ".$_SESSION["firstname"]." ".$_SESSION["infix"]." ".$_SESSION["lastname"]."</h><h4 id='right'><img src='img/user.png' alt='userimage'>".$_SESSION["userrole"]."</h4><h4 id=bottom></h4>";
	}
	else
	{
	
	}
?>