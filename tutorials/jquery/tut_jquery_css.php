<style>
.test345
{
	border:30px dashed pink;
}
</style>

<h4>JQuery CSS example</h4>
<button id="btn_css">Klik op mij voor een Jquery CSS voorbeeld met chaining</button>
<button id="btn_cssJSObject">Klik op mij voor een Jquery CSS voorbeeld met een JavaScript Object</button>


<script>
	$("document").ready(function(){
		
		// CSS veranderen door chaining
		$("#btn_css").click(function(){
			//alert("Hallo dan!");
			$(this).css("background-color", "rgba(20, 220, 220, 1)")
				   .css("width", "400px")
				   .css("height", "200px")
				   .css("border-radius", "15px")
				   .css("outline", "0")
				   .addClass("test345");			
		});
		
		// 1) Maak een selector voor de button met id btn_cssJSObject
		// 2) Voeg een click event toe
		// 3) Voeg met de css method een property margin-top = 20px toe en outline = 0
		//	  zodat de buttons loskomen van elkaar na de click
		
		// Veranderen css met een JavaScript Object!
		var btnCSSObj = { marginTop : "20px",
						  outline 	   : "0",
						  border	   : "5px solid yellow",
						  backgroundColor : "#FF0000"};
		
		$("#btn_cssJSObject").click(function(){
			$(this).css(btnCSSObj);
			var width = parseFloat($(this).css("width"));
			if ( width < 500)
			{
				alert("De breedte is: " + width + ". \nDit is kleiner dan 500. \nIk maak de breedte 600px");
				$(this).css("width", "600px");
			}						
		});
	});
</script>