<h4>JQuery Hover demo</h4>
<form>
	<input type="text" name="naam" /><br>
	<input type="submit" name="submit" />
</form>

<button id="btn_hide">hide</button>
<button id="btn_show">show</button>
<button id="btn_toggle">toggle</button>
<img src="./img/vogelbekdier.jpg" alt="vogelbekdier" width="300px"/>
<p>Vogelbekdier</p> 


<script>
	$(document).ready(function(){
		//alert("Het werkt!!!");
		$("input").css({"width" : "250px",
						"box-sizing" : "border-box"});
		
		$("input[type='submit']").css({"padding" : "1em",
									   "fontsize" : "1.3em"})
								 .hover(function()
								 {
									$(this).attr("value", "Klik op mij!");
								 },
								 function(){
									$(this).attr("value", "Versturen")
								 }); 

		$("img").hover(function(){
			$(this).attr({"src" : "./img/dwerghamster.jpg",
						  "width" : "300px",
						  "alt" : "dwerghamster"});
			$("p").text("dwerghamster");
		},
		function(){
			$(this).attr({"src" : "./img/vogelbekdier.jpg",
						  "width" : "300px",
						  "alt" : "vogelbekdier"});
			$("p").text("vogelbekdier");
		});
		
		$("button").css({"width" : "100px",
						 "padding" : "1em",
						 "font-size" : "1.5em",
						 "color" : "grey"})
				   .hover(function()
				   {
						$(this).css({"font-size" : "1.9em",
									 "padding" : "0.6em"});
				   },
				   function(){
						$(this).css({"font-size" : "1.5em",
									 "padding" : "1em"});
				   });	

		$("#btn_hide").click(function(){
			$("img").hide();
			$("p").hide();
		});
		
		$("#btn_show").click(function(){
			$("img").show();
			$("p").show();
		});
		
		$("#btn_toggle").click(function(){
			$("img").toggle();
			$("p").toggle();
			
		});
	});
	
</script>