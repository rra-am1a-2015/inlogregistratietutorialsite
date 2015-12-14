<h4>Jquery Animation</h4>

<div id="animation_demo">
</div>
<button id="btn_animation">Start animatie</button>

<script>
	$("#btn_animation").hover(function(){
		$(this).css("box-shadow", "10px 10px 5px #888888");
	}, function(){
		$(this).css("box-shadow", "0px 0px 0px #888888");
	});
</script>