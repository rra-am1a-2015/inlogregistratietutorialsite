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
						include("./topic_links/css_link.php");
					break;
					case "php":
						include("./topic_links/php_link.php");
					break;
					case "javascript":
						include("./topic_links/javascript_link.php");
					break;
					case "jquery":
						include("./topic_links/jquery_link.php");
					break;
					case "jquery-ui":
						include("./topic_links/jquery_ui_link.php");
					break;
					case "sass":
						include("./topic_links/sass_link.php");
					break;
					case "less":
						include("./topic_links/less_link.php");
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

<script>
	$("document").ready(function(){
		$("#link_accordion").accordion();
		$("#link_accordion").find("div").css({ fontSize : "1.0em"});
	});
</script>











