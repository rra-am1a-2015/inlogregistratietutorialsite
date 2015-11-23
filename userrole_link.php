<?php
	if (isset($_SESSION["id"]))
	{
		switch($_SESSION["userrole"])
		{
			case "developer":
				echo "<a href=''>PHP</a> - <a href='index.php?content=tutorials/css/tut_floats'>CSS</a> - JavaScript - JQuery - SASS - LESS";
				break;
			case "administrator":
				echo "admin";
				break;
			case "root":
				echo "root";
				break;
			case "customer":
				echo "customer";
				break;
			default:
				break;
		}
	}
?>