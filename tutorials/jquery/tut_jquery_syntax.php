<h5>JQuery Syntax</h5>

<script type="text/javascript">
	
	$(document).ready(function()
	{
		var name = "Arjan";
		//alert("Mijn naam is: " + name);
		// Javascript werkt gewoon!
		document.getElementById("demoName").innerHTML = "Mijn naam is: " + name;
		
		//$("#btn_1").css("border", "2px solid grey");
		//$("#btn_1").css("padding", "20px");
		
		$("#btn_1").click(function()
		{
			$("p").hide();
			$(this).text("DubbelKlik op mij!");
			///var padding = $(this).css("padding");
			//alert(padding);
			$(this).css("padding", "20px")
				   .css("border", "20px solid grey")
				   .css("background-color", "rgba(20, 200, 20, 0.5)")
				   .css("font-size", "2em")
				   .css("font-weight", "bold")
				   .css("color", "white");
			
		});	
		
		$("#btn_1").dblclick(function()
		{
			$("p").show();
			$(this).text("Klik op mij!");
						
			$(this).css( {"padding" 		: "30px",
						  "backgroundColor" : "purple",
						  "font-size"		: "4em",
						  "float"			: "right"} );
			var padding = $("#btn_1").css("padding");
			console.log("De padding is: " + padding);
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
<button id="btn_1">Klik op mij!</button> 

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
