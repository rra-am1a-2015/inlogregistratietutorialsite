<?php
	session_start();
	header("Content-type: text/css; charset: UTF-8");

	if ( isset($_SESSION["id"]))
	{
	  	include("./userrole_link.css");
	}
?>


