<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>
		<title>inlogregistratietutorialsite</title>	
		<link rel="stylesheet" type="text/css" href="css/style.php">
		<link rel="stylesheet" type="text/css" href="css/style-split.css">
		<link rel="stylesheet" type="text/css" href="./jquery/jquery-ui-1.11.4.custom/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="./css/style-less.css">
		
		<!-- Dit is een link naar LESS -->		
		<!--<link rel="stylesheet/less" type="text/css" href="css/style-less.less"> -->
		
		
		<!--<link rel="stylesheet" media="(max-width:400px) and (min-width:350px)" type="text/css" href="css/style-responsive.css">-->
		<!--<script src='./jquery/jquery-2.1.4.min.js'></script>-->
		<script src='./jquery/jquery-2.1.4.js'></script>
		<script src='./jquery/jquery-ui-1.11.4.custom/jquery-ui.js'></script>
		
		<!-- Verwijzing naar LESS javascript bestand -->
		<!-- <script src="./less.js-2.5.3/dist/less.js"></script> -->
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
	</head>
	<body>
		<div id="container">
			<div id="banner">
				<?php include("banner.php"); ?>
			</div>
			<div id="link">
				<?php include("link.php"); ?>
			</div>
			<div id="user_info">
				<?php include("user_info.php"); ?>
			</div>
			<div id="userrole_link">
				<?php include("userrole_link.php"); ?>
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