 <?php
	if (isset($_SESSION["id"]))
	{
		switch($_SESSION["userrole"])
		{
			case "developer":
				echo "<a href='index.php?content=developer_homepage&topic=css'>CSS</a> -
					  <a href='index.php?content=developer_homepage&topic=php'>PHP</a> - 					   
					  <a href='index.php?content=developer_homepage&topic=javascript'>JavaScript</a> -
					  <a href='index.php?content=developer_homepage&opic=jquery'>JQuery</a> -
					  <a href='index.php?content=developer_homepage&topic=sass'>SASS</a> -
					  <a href='index.php?content=developer_homepage&topic=less'>LESS</a>";
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