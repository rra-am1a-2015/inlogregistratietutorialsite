<?php
	$userrole = "developer";
	include("security.php");
	echo "<h3>Developer homepage</h3>";
?>
<div id="dev_container">
	<nav>
		<?php if (isset($_GET["topic"]))
			{
				switch($_GET["topic"])
				{
					case "css":
						echo   "<a href='index.php?content=developer_homepage&page=tutorials/css/tut_floats&topic=css'>floats</a>
								<a href='index.php?content=developer_homepage&page=tutorials/css/tut_clearfix&topic=css'>clearfix</a>
								<a href='index.php?content=developer_homepage&page=tutorials/css/tut_column_collapse&topic=css'>column collapse</a>
								<a href='index.php?content=developer_homepage&page=tutorials/css/tut_container_collapse&topic=css'>container collapse</a>
								<a href='index.php?content=developer_homepage&page=tutorials/css/tut_position_absolute&topic=css'>container collapse</a>";
					break;
					case "php":
						echo "<a href='index.php?content=developer_homepage&page=tutorials/php/tut_php_switch&topic=php'>php switch</a>";
					break;
					
					default:
					break;
				}		
			}
			else
			{
				echo "testdetest";
			}
		?>		
	</nav>

	<section>
		<?php 
			if (isset($_GET["page"]))
			{
				include($_GET["page"].".php");
			}
			else
			{
				echo "Klik hiernaast voor een tutorial onderwerp";
			}			
		?>
	</section>
</div>











