
<h4>Fade example</h4>
<button id="btn_fade_in">Fade in</button>
<button id="btn_fade_out">Fade out</button>
<button id="btn_fade_toggle">Fade toggle out</button>
<button id="btn_fade_to20">Fade to 20%</button>
<button id="btn_fade_to80">Fade to 80%</button>
<div id="fade_example">
klik op deze zin en niet op de knop voor css opmaak
</div>


<script>
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
						
		$("#btn_fade_toggle").attr(btnCSS)
						.click(function(){
							$("#fade_example").fadeToggle(2000, function(){
								console.log("Ik ben er weer!!" + $(this).text());
								if ( $("#btn_fade_toggle").text() == "Fade toggle out")
								{
									$("#btn_fade_toggle").text("Fade toggle in");
								}
								else
								{
									$("#btn_fade_toggle").text("Fade toggle out");
								}
							});
						
						});
		
		$("#btn_fade_to20").attr(btnCSS).click(function(){
			$("#fade_example").fadeTo(2000, 0.2);		
		});
		
		$("#btn_fade_to80").attr(btnCSS).click(function(){
			$("#fade_example").fadeTo(2000, 0.8);		
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