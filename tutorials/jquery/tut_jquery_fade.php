
<h4>Fade example</h4>
<button id="btn_fade_in">Fade in</button>
<button id="btn_fade_out">Fade out</button>
<div id="fade_example">
klik op deze zin en niet op de knop voor css opmaak
</div>


<script>
	var schoenmaat = 44;
	
	var btnCSS = { style : "padding: 1em;" +
						   "border-radius: 0.5em;" +
						   "border: 0px solid red;" + 
						   "margin-bottom: 1em"}
	

	$("document").ready(function(){
		//console.log("Hallo");
		$("#btn_fade_out").attr(btnCSS)
						  .click(function(){
							//console.log("Hallo dit is de knop");	
							$("#fade_example").fadeOut(2000, function(){
								console.log("weg ben ik!!");
							});
						  });	

		$("#btn_fade_in").attr(btnCSS)
						.click(function(){
							$("#fade_example").fadeIn(2000, function(){
								console.log("Ik ben er weer!!");
							})
						
						});
		
		
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