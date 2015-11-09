<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>
		<title>inlogregistratietutorialsite</title>	
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!--<link rel="stylesheet" media="(max-width:400px) and (min-width:350px)" type="text/css" href="css/style-responsive.css">-->
	</head>
	<body>
		<div id="container">
			<div id="banner">
				<?php include("banner.php"); ?>
			</div>
			<div id="link">
				<?php include("link.php"); ?>
			</div>
			<div id="content">
				<?php include("redirect.php"); ?>
			</div>
			<div id="footer">
				<?php include("footer.php"); ?>
			</div>			
		</div>
	</body>
</html>