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
					case "json":
						include("./topic_links/json_link.php");
					break;
					case "jquery":
						include("./topic_links/jquery_link.php");
					break;
					case "jquery-ui":
						include("./topic_links/jquery_ui_link.php");
					break;
					case "pdo":
						include("./topic_links/pdo_link.php");
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
	function getCookie(cname) {
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for(var i=0; i<ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1);
			if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
		}
		return "";
	}
	
	$("document").ready(function(){
		$("#link_accordion").accordion({ heightStyle: "content",
										 create: function(event, ui) { 
													var stateActive = parseInt(getCookie("state"));
													$( "#link_accordion" ).accordion( "option", "active", stateActive );
												 },
										 state		: false,
										 collapsible: true
										 }); 
			
		$("#link_accordion").find("div").css({ fontSize : "0.96em"});
		
		$("#link_accordion").on("accordionactivate", function( event, ui){
											var state = $("#link_accordion").accordion("option", "active");											
											document.cookie = "state=" + state;
											var stateActive = parseInt(getCookie("state"));
											$( "#link_accordion" ).accordion( "option", "active", stateActive );
										});										
	});
</script>











