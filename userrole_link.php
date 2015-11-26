<?php
	if (isset($_SESSION["id"]))
	{
		switch($_SESSION["userrole"])
		{
			case "developer":
				echo "<a href='index.php?content=developer_homepage'>CSS</a> -
					  <a href='index.php?content=developer_homepage'>PHP</a> - 					   
					  <a href='index.php?content=developer_homepage'>JavaScript</a> -
					  <a href='index.php?content=developer_homepage'>JQuery</a> -
					  <a href='index.php?content=developer_homepage'>SASS</a> -
					  <a href='index.php?content=developer_homepage'>LESS</a>";
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