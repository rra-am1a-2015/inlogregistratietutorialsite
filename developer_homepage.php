<?php
	include("security.php");
	echo "<h4>Welkom: ".$_SESSION["firstname"]." ".$_SESSION["infix"]." ".$_SESSION["lastname"]."</h4><br>Je bent ingelogd. Vraagje: houd jij van appeltaart, ".$_SESSION["appeltaart"];
?>








