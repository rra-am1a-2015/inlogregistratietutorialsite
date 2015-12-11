<h4>Fade example</h4>


<div id="fade_example">
klik hier voor css opmaak
</div>

<script>
	$("document").ready(function(){
		//console.log("Hallo");
		$("#fade_example").click(function(){ 
			//console.log("Het werkt");
			$(this).attr("style", "border: 2px solid green;" +
								  "width: 250px;" +
								  "height: 250px;" +
								  "background-color: yellow;" +
								  "padding: 1em;" +
								  "font-size: 3em");
			$(this).text("Fade voorbeeld");
		});	
	});
</script>