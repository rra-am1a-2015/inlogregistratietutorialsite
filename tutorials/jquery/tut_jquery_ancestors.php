<h4>Dit is een voorbeeld voor JQuery Ancestors</h4>

<div>
	<ul>
		<li>Een</li>
		<li>twee</li>
		<li>drie</li>
		<li>vier</li>
		<li>vijf</li>	
	</ul>
</div>

<script>
	$("document").ready(function(){
		$("ul").css({listStyleType : "none", border : "2px solid blue"});
		
		$("ul").parentsUntil("div#content").css("border", "2px solid red");
	})

</script>