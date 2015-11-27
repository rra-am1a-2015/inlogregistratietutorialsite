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
						echo   "<a href='index.php?content=developer_homepage&page=tutorials/css/tut_floats&topic=css'>CSS floats</a>
								<a href='index.php?content=developer_homepage&page=tutorials/css/tut_clearfix&topic=css'>CSS clearfix</a>
								<a href='index.php?content=developer_homepage&page=tutorials/css/tut_column_collapse&topic=css'>CSS column collapse</a>
								<a href='index.php?content=developer_homepage&page=tutorials/css/tut_container_collapse&topic=css'>CSS container collapse</a>
								<a href='index.php?content=developer_homepage&page=tutorials/css/tut_position_absolute&topic=css'>CSS container collapse</a>";
					break;
					case "php":
						echo "<a href='index.php?content=developer_homepage&page=tutorials/php/tut_php_switch&topic=php'>PHP switch</a>
							  <a href='index.php?content=developer_homepage&page=tutorials/php/tut_php_while_loops&topic=php'>PHP while loops</a>
							  <a href='index.php?content=developer_homepage&page=tutorials/php/tut_php_for_loops&topic=php'>PHP for loops</a>
							  <a href='index.php?content=developer_homepage&page=tutorials/php/tut_php_functions&topic=php'>PHP functions</a>
							  <a href='index.php?content=developer_homepage&page=tutorials/php/tut_php_arrays&topic=php'>PHP arrays</a>";
					break;
					case "javascript":
						echo "<a href='index.php?content=developer_homepage&page=tutorials/javascript/tut_js_switch&topic=javascript'>JS switch</a>
							  <a href='index.php?content=developer_homepage&page=tutorials/javascript/tut_js_while_loops&topic=javascript'>JS while loops</a>
							  <a href='index.php?content=developer_homepage&page=tutorials/javascript/tut_js_for_loops&topic=javascript'>JS for loops</a>
							  <a href='index.php?content=developer_homepage&page=tutorials/javascript/tut_js_functions&topic=javascript'>JS functions</a>
							  <a href='index.php?content=developer_homepage&page=tutorials/javascript/tut_js_arrays&topic=javascript'>JS arrays</a>";
					break;
					case "jquery":
						echo "<a href='index.php?content=developer_homepage&page=tutorials/jquery/tut_jquery_get_started&topic=jquery'>JQuery get started</a>
							  <a href='index.php?content=developer_homepage&page=tutorials/jquery/tut_jquery_syntax&topic=jquery'>JQuery syntax</a>
							  <a href='index.php?content=developer_homepage&page=tutorials/jquery/tut_jquery_selectors&topic=jquery'>JQuery selectors</a>
							  <a href='index.php?content=developer_homepage&page=tutorials/jquery/tut_jquery_events&topic=jquery'>JQuery events</a>";
					break;
					case "sass":
						echo "<a href='index.php?content=developer_homepage&page=tutorials/sass/tut_sass_get_started&topic=sass'>SASS get started</a>
							  <a href='index.php?content=developer_homepage&page=tutorials/sass/tut_sass_syntax&topic=sass'>SASS syntax</a>";
					break;
					case "less":
						echo "<a href='index.php?content=developer_homepage&page=tutorials/less/tut_less_get_started&topic=less'>LESS get started</a>
							  <a href='index.php?content=developer_homepage&page=tutorials/less/tut_less_syntax&topic=less'>LESS syntax</a>";
					break;
					default:
					break;
				}		
			}
			else
			{
				echo "";
			}
		?>		
	</nav>

	<section>
		<?php 
			if (isset($_GET["page"]))
			{
				include($_GET["page"].".php");
			}
			else if (isset($_GET["topic"]))
			{
				echo "Klik hiernaast voor een tutorial onderwerp";
			}
			else
			{
				echo "Klik hierboven voor een tutorial onderwerp";
			}
		?>
	</section>
</div>











