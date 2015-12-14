<h4>Jquery Animation</h4>

<div id="animation_demo">
	Hallo
</div>
<button id="btn_animation">Start animatie</button>
<button id="btn_animation_stop">Stop!</button>

<script>
	$("document").ready(function(){
	
	// Toevoegen schaduw wanneer er over de button wordt gehoverd.
		$("#btn_animation").hover(function(){
			$(this).css("box-shadow", "10px 10px 5px #888888");
		}, function(){
			$(this).css("box-shadow", "0px 0px 0px #888888");
		});

	
	// De animation....
		var changeCSSGoRight = { left : "200px",
								fontSize : "2em", 
								backgroundColor : "rgba(200, 0, 0, 0.6)",
								padding : "0.5em",
								width : "200px"};
						  
		var changeCSSGoDown = { top : "200px",
								color : "white",
								height : "200px"};
		
		var changeCSSGoLeft = { left : "0px",
								backgroundColor : "black",
								borderRadius : "0.3em",
								width : "100px"};
		
		var changeCSSGoUp = { top : "0px",
							  height : "100px"};
	
		$("#btn_animation").click(function(){
			$("#animation_demo").animate(changeCSSGoRight, 2000, function(){ 
				$(this).animate(changeCSSGoDown, 2000, function() {
					$(this).delay(3000).animate(changeCSSGoLeft, 2000, function(){
						$(this).animate(changeCSSGoUp, 2000)});});});		
		});
		
		var stopCSS = { top: "0px",
						left : "0px"};
		
		$("#btn_animation_stop").click(function(){
			$("#animation_demo").stop();
		});
	});
	
</script>