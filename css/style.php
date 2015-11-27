<?php
	session_start();
	header("Content-type: text/css; charset: UTF-8");
?>
*
{
	margin:0px;
	padding:0px;
}

#link
{
	background-color:rgb(255, 127, 0);
	color:white;
	border-radius:6px;
	text-align:center;
	margin-top:10px;
	font-size:16px;
	padding:10px;
}



<?php 
	if ( isset($_SESSION["id"]))
	{
	  echo "#user_info
			{
				border:1px solid rgba(101, 193, 205, 1);
				margin-top:10px;
				padding:10px;
				border-radius:6px;
				background-color:rgba(101, 193, 205, 1);
				color: white;
			}

			#user_info #right
			{
				float: right;
			}

			#user_info #left
			{
				float: left;
			}
			
			#userrole_link
			{
				background-color:rgb(255, 127, 0);
				color:white;
				border-radius:6px;
				text-align:center;
				margin-top:10px;
				font-size:16px;
				padding:10px;
			}";
	}
?>


#user_info #bottom
{
	clear: left;
}



#footer, #banner
{
	font-size:25px;
	font-weight:bold;
	text-align:center;
	background-color:RGB(138, 192, 7);
	color:white;
	border-radius:6px;
	padding:10px;
}

body
{
	font-family:Verdana, Arial;
	font-size:14px;
}

#container
{
	border:0px solid blue;
	padding:0px;
	margin:30px auto;
	width:800px;
}

#banner
{
	border:0px solid red;
}

#content
{
	border:0px solid green;
	background-color:RGB(221,221,221);
	padding:20px;
	border-radius:6px;
	margin-top:20px;
	margin-bottom:20px;
}

#footer
{
	border:0px solid red;
	
}

a
{
	color:white;
	text-decoration:none;
}

a:hover
{
	font-size:15px;
}

#register
{
	border:0px solid grey;
	width: 300px;
	margin:0px auto;
}

#register input
{
	border-radius: 6px;
	border:1px solid grey;
	padding:10px;
	width:150px;
}

#register table td
{
	padding:6px;
	border:0px solid grey;
}

#register table
{
	border-collapse:collapse;
}

#register input[type=submit]
{
	background-color:rgb(255, 127, 0);
	color:white;
	font-size:1.1em;
	font-weight:bold;
	width:171px;
}


















.table
{
	border:0px solid grey;
	width: 420px;
	margin:0px auto;
}

.table input
{
	border-radius: 6px;
	border:0px solid grey;
	padding:10px;
	width:150px;
}

.table table td
{
	padding:6px;
	border:0px solid grey;	
}

.table table
{
	border-collapse:collapse;
}

.table input[type=submit]
{
	background-color:rgb(255, 127, 0);
	color:white;
	font-size:1.1em;
	font-weight:bold;
	width:171px;
}

#dev_home_container
{
	overflow:hidden;
	//float:left;
}	

#dev_home_container div
{
	border:1px solid red;
	width:150px;
	height:150px;
	margin-top:2%;
	margin-right:2%;
	background-color:blue;
	color: white;
	font-weight:bold;
	font-size:16px;
}

#dev_home_container #nr_1
{
	background-color:yellow;
	float:left;
	width:31%;
	height:250px;
}

#dev_home_container #nr_2
{
	background-color:black;
	float:right;
	width:31%;
	height:400px;
}

#dev_home_container #nr_3
{
	background-color:purple;
	float:left;
	width:100%;
	clear:both;
}

#dev_home_container #nr_4
{
	background-color:maroon;
	float:left;
	clear:left;
	width:70%;
}

#dev_home_container #nr_5
{
	background-color:pink;
	float:left;
	width:21%;
}

#dev_home_container #nr_6
{
	background-color:brown;
	float:left;
	width:100%;
	height:400px;
}

#dev_home_container #nr_7
{
	background-color:green;
	float:left;
	width:156px;
	height:400px
}

#dev_home_container #nr_8
{
	background-color:grey;
	float:left;
	//clear:left; 
}

#dev_home_container #nr_9
{
	background-color:yellow;
	float:left;
}

#dev_home_container #nr_10
{
	background-color:black;
	float:left;
}

#dev_home_container #nr_11
{
	background-color:purple;
	float:left;
}

#dev_home_container #nr_12
{
	background-color:maroon;
	float:left;
}

#dev_home_container #nr_13
{
	background-color:pink;
	float:left;
}

#dev_home_container #nr_14
{
	background-color:brown;
	float:left;
}

#dev_home_container #nr_15
{
	background-color:green;
	float:left;
}

#dev_home_container #nr_16
{
	background-color:grey;
	float:left;
}

#dev_home_container br
{
	clear:both;
}

#dev_container
{
	border: 0 px solid black;
	overflow:hidden;
}

#dev_container a
{
	display:block;
}

#dev_container nav, section
{
	background-color: rgba(200, 200, 200, 1);
	
	padding:1%;
	padding-bottom:1000em;
	margin-bottom:-999em;
	border-radius:6px;
}

#dev_container nav
{
	width: 24%;
	float:left;
	margin-right:1%;
}

#dev_container section
{
	width: 71%;
	float:right;
}
