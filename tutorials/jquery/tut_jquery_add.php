<h4>JQuery Tutorial Add tekst</h4>

<ul>
	<li>Mercedes</li>
	<li>Fiat</li>
	<li>BMW</li>
	<li>Citroen</li>
</ul>

<button class="button" id="append">Voeg tekst toe aan einde</button>

<script>
// 1) Maak een selector voor deze button
// 2) Koppel een click event aan de button
// 3) Plaats binnen het click event een anonieme functie
// 4) Maak een selector binnen deze functie voor het eerste list item en gebruik append om tekst toe te voegen.

	$("button").click(function(){
		//alert("Hallo dan!");
		var selection = $("li");
		selection.first().append(", is mijn lievelings automerk");
		
		for ( var i = 0; i < selection.length; i++)
		{
			// selecteer het listitem met fiat. Voeg daar aan toe , altijd wat
			if ( selection.eq(i).text() == "Fiat")
			{
				selection.eq(i).append(", altijd wat");
			}
		}
	});
</script>
