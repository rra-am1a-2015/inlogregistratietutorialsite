 <?php
	if (isset($_SESSION["id"]))
	{
		switch($_SESSION["userrole"])
		{
			case "developer":
				echo "<a href='index.php?content=developer_homepage&topic=css'>CSS</a> -
					  <a href='index.php?content=developer_homepage&topic=php'>PHP</a> - 					   
					  <a href='index.php?content=developer_homepage&topic=javascript'>JavaScript</a> -
					  <a href='index.php?content=developer_homepage&topic=json'>JSON</a> -
					  <a href='index.php?content=developer_homepage&topic=jquery'>jQuery</a> -
					  <a href='index.php?content=developer_homepage&topic=jquery-ui'>jQuery UI</a> -
					  <a href='index.php?content=developer_homepage&topic=pdo'>PDO</a> -
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