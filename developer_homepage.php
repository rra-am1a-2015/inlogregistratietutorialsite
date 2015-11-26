<?php
	$userrole = "developer";
	include("security.php");
	echo "<h3>Developer homepage</h3>";
?>
<div id="dev_container">
	<nav>
		<a href='index.php?content=developer_homepage&page=tutorials/css/tut_floats'>floats</a>
		<a href='index.php?content=developer_homepage&page=tutorials/css/tut_clearfix'>clearfix</a>
		<a href='index.php?content=developer_homepage&page=tutorials/css/tut_column_collapse'>column collapse</a>
		<a href='index.php?content=developer_homepage&page=tutorials/css/tut_container_collapse'>container collapse</a>
		<a href='index.php?content=developer_homepage&page=tutorials/css/tut_position_absolute'>container collapse</a>
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











