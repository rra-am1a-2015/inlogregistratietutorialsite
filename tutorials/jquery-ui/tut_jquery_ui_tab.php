<h4>jQueryUI Tabs</h4>

<div id="tabbladen">
	<ul>
		<li><a href="#tabs-1">Eerste Blad</a></li>
		<li><a href="#tabs-2">Tweede Blad</a></li>
	</ul>
	<div id="tabs-1">
		Dit is mijn eerste jQueryUI tabblad
	</div>
	<div id="tabs-2">
		Dit is mijn tweede jQueryUI tabblad en is bij eerste weergave ook meteen actief
	</div>
</div>

<button id="voegTabToe" class="button">Voeg Tab toe</button>

<script>
	$("document").ready(function(){
		var tabOptions = { disabled : [ ] ,
						   active	: 1};
		
		$("#tabbladen").tabs(tabOptions);
		
		$("#voegTabToe").click(function(){
			$("#tabbladen").find("li:last").after("<li><a href='#tabs-3'>Derde Blad</a></li>");
			$("#tabbladen").find("div:last").after("<div //id='tabs-3'>Dit is het derde blad, dynamisch toegevoegd</div>");
			$("#tabbladen").tabs("refresh");
		});
	});
</script>