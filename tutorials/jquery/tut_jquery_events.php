<h5>JQuery Events</h5>
<p id="hover_demo">Hover over mij en de tekst zal veranderen</p>
<script>
	

	
	$(document).ready(function ()
	{
		//Hier alle code AUB.....
		var oldCSS = {"border": "2px solid orange",
					  "font-size": "2em",
					  "color": "white",
					  "background-color" : "green"};
					  
		var newCSS = {"background-color" : "yellow",
					  "border" : "5px dashed red",
					  "color" : "green"};
		
		$("p").css(oldCSS);	
			  
		$("#hover_demo").mouseenter(function()
		{
			//alert("Er is gemouseentered!!!!!!!!!!!!");
			$(this).css(newCSS);
		});
		
		$("#hover_demo").mouseleave(function()
		{
			//alert("mouseleave");
			$(this).css(oldCSS);
		});
	
	
	});
</script>
