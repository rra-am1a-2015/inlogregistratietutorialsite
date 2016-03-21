<h5>LESS Syntax</h5>
<hr>
<pre>
//Dit is een voorbeeld van een Nested rule
// Alleen mogelijk met LESS

#register
{
	border:0px solid grey;
	width: 300px;
	margin:0px auto;
	
	input
	{
		border-radius: px;
		border:1px solid grey;
		padding:10px;
		width:150px;
	}
	
	table 
	{
		padding:6px;
		border:0px solid grey;
		border-collapse:collapse;
		
		td
		{
			padding:6px;
			border:0px solid grey;
		}
	}
	
	input[type=submit]
	{
		background-color:rgb(255, 127, 0);
		color:white;
		font-size:1.1em;
		font-weight:bold;
		width:171px;
	}
}</pre>
<hr>