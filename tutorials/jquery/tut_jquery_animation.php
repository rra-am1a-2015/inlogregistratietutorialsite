<h4>Jquery Animation</h4>

<div id="animation_demo">
</div>
<button id="btn_animation">Start animatie</button>

<script>
	$("document").ready(function(){
	
	// Toevoegen schaduw wanneer er over de button wordt gehoverd.
		$("#btn_animation").hover(function(){
			$(this).css("box-shadow", "10px 10px 5px #888888");
		}, function(){
			$(this).css("box-shadow", "0px 0px 0px #888888");
		});

	
	// De animation....
		var changeCSS = { left : "200px"};
	
		$("#btn_animation").click(function(){
			//alert("Hallo!");
			$("#animation_demo").animate(changeCSS, 10000, function(){ alert("He He ik ben er!");});
		
		});
	});
	
</script>