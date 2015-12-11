
<h4>Slide example</h4>
<button id="btn_slide_up">Slide Up</button>
<button id="btn_slide_down">Slide Down</button>
<button id="btn_slide_toggle">Slide toggle Up</button>
<div id="slide_example">
klik op deze zin en niet op de knop voor css opmaak
</div>


<script>
	var sliderSpeed = 2500;
	var btnCSS = { style : "padding: 1em;" +
						   "border-radius: 0.5em;" +
						   "border: 0px solid red;" + 
						   "margin-bottom: 1em"};
	

	$("document").ready(function(){
		//console.log("Hallo");
		$("#btn_slide_up").attr(btnCSS)
						  .click(function(){
							//console.log("Hallo dit is de knop");	
							$("#slide_example").slideUp(sliderSpeed, function(){
								console.log("weg ben ik!!");
								if ( $("#btn_slide_toggle").text() == "Slide toggle Up")
								{
									$("#btn_slide_toggle").text("Slide toggle down");
								}
								else
								{
									$("#btn_slide_toggle").text("Slide toggle down");
								}
							});
						  });	

		$("#btn_slide_down").attr(btnCSS)
						.click(function(){
							$("#slide_example").slideDown(sliderSpeed, function(){
								console.log("Ik ben er weer!!");
								if ( $("#btn_slide_toggle").text() == "Slide toggle down")
								{
									$("#btn_slide_toggle").text("Slide toggle Up");
								}
								else
								{
									$("#btn_slide_toggle").text("Slide toggle Up");
								}
							})
						
						});
						
		$("#btn_slide_toggle").attr(btnCSS)
						.click(function(){
							$("#slide_example").slideToggle(sliderSpeed, function(){
								//console.log("Ik ben er weer!!" + $(this).text());
								if ( $("#btn_slide_toggle").text() == "Slide toggle Up")
								{
									$("#btn_slide_toggle").text("Slide toggle down");
								}
								else
								{
									$("#btn_slide_toggle").text("Slide toggle Up");
								}
							});
						
						});
		
		$("#slide_example").click(function(){ 
			//console.log("Het werkt");
			$(this).attr("style", "border: 2px solid green;" +
								  "width: 250px;" +
								  "height: 250px;" +
								  "background-color: yellow;" +
								  "padding: 1em;" +
								  "font-size: 3em");
			$(this).text("Slide voorbeeld");
		});

		
	});
</script>