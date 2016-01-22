<h4>JQuery  Filtering</h4>
<h3>Verander heading 1 en heading 6 en de borders</h3>
<button class="button" id="btn_first">Verander</button>
<div id="heading">
	<h1>Heading 1</h1>
	<h2>Heading 2</h2>
	<h3>Heading 3</h3>
	<h4>Heading 4</h4>
	<h5>Heading 5</h5>
	<h6>Heading 6</h6>
</div>

<hr>
<h3>Verander heading 4</h3>
<button class="button" id="btn_filter">Filter op h4</button>

<div id="heading">
	<h1>Heading 1</h1>
	<h2>Heading 2</h2>
	<h3>Heading 3</h3>
	<h4>Heading 4</h4>
	<h5>Heading 5</h5>
	<h6>Heading 6</h6>
</div>



<script>
	$("document").ready(function(){
		// first() filter
		$("#btn_first").mouseenter(function(){
		//alert("Hallo");
		
			var cssLi = { backgroundColor	: "#aabbcc",
						  border			: "2px solid orange",
						  borderRadius		: "20px" };
			
			$("#heading").children().first().css(cssLi);
		
		});
		
		// last() filter
		$("#btn_first").mouseleave(function(){
		//alert("Hallo");
		
			var cssLi = { backgroundColor	: "#ffffff",
						  border			: "5px solid yellow",
						  borderRadius		: "20px" };
			
			$("#heading").children().last().css(cssLi);
		
		});
		
		// eq(1) filter met mouseup
		$("#btn_first").mouseup(function(){
			var cssLi = { border	: "10px solid black" };
			var selection = $("#heading").children();
			for ( var i = 0; i < selection.length; i++)
			{
				selection.eq(i).css(cssLi);
			}
			
		});
		
		
		
	
	});
</script>
