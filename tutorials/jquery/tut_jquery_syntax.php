<h5>JQuery Syntax</h5>

<script type="text/javascript">
	
	$(document).ready(function()
	{
		var name = "Arjan";
		//alert("Mijn naam is: " + name);
		// Javascript werkt gewoon!
		document.getElementById("demoName").innerHTML = "Mijn naam is: " + name;
		
		$("#btn_1").click(function()
		{
			$("p").hide();
		});	

		$("#btn_2").dblclick(function()
		{
			$("li").hide();
		});
	});
	
	
</script>

<p id="demoName"></p>

<p>Dit is de eerste</p>
<p>Dit is de tweede</p>
<p>Dit is de derde</p>
<p>Dit is de vierde</p>
<p>Dit is de vijfde</p>
<p>Dit is de zesde</p>
<button id="btn_1">Verdwijn!</button> 

<ul>
	<li>eerste</li>
	<li>tweede</li>
	<li>derde</li>
	<li>vierde</li>
	<li>vijfde</li>
	<li>zesde</li>
	<li>zevende</li>
	<li>achtste</li>
	<li>negende</li>
	<li>tiende</li>
</ul> 
<button id="btn_2">Verdwijn!</button>
