<a href="index.php?content=homepage">home</a>


<?php
	if ( isset($_SESSION["id"]))
	{
		switch($_SESSION['userrole'])
		{
			case "developer":
				echo "<a href='index.php?content=developer_homepage'>developer-home</a> ";
				break;
			case "root":
				echo "<a href='index.php?content=root_homepage'>root-home</a> ";
				break;
			case "administrator":
				echo "<a href='index.php?content=administrator_homepage'>admin-home</a> ";
				break;
			case "customer":
				echo "<a href='index.php?content=customer_homepage'>customer-home</a> ";
				break;			
			default:
			break;
		
		}
		
		echo "<a href='index.php?content=logout'>uitloggen</a>";
		
	}
	else
	{
		echo "<a href='index.php?content=login_form'>inloggen</a> ";
		echo "<a href='index.php?content=register_form'>registreer</a>";
	}
?>