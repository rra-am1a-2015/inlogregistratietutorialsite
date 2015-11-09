<?php
	echo "<h4>Welkom: ".$_SESSION["firstname"]." ".$_SESSION["infix"]." ".$_SESSION["lastname"]."</h4><br>Je bent vanaf nu uitgelogd. Je wordt doorgestuurd naar de algemene startpagina.";
	session_unset();
	session_destroy();
	header("refresh:4;url=index.php?content=homepage");
?>