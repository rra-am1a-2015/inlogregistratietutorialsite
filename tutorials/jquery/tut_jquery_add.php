<h4>JQuery Tutorial Add text</h4>

<ul>
	<li>Mercedes</li>
	<li>Fiat</li>
	<li>BMW</li>
	<li>Citroen</li>
</ul>

<button class="button" id="append">Voeg tekst toe aan einde</button>
<button class="button" id="prepend">Voeg tekst toe aan het begin</button>
<button class="button" id="after">Voeg &lt;li&gt; toe met nieuw automerk na laatste &lt;li&gt;</button>
<button class="button" id="before">Voeg &lt;li&gt; toe met nieuw automerk voor eerste &lt;li&gt;</button>

<script>
// 1) Maak een selector voor deze button
// 2) Koppel een click event aan de button
// 3) Plaats binnen het click event een anonieme functie
// 4) Maak een selector binnen deze functie voor het eerste list item en gebruik append om tekst toe te voegen.

	$("#append").click(function(){
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
	
	$("#after").click(function(){
		//alert("Hallo dan!");
		var selection = $("li");
		var selectedCar = selection.last();		
		if ( selectedCar.text() == "Citroen")
		{
			selectedCar.after("<li>Daihutsu Core</li>");
		}
	});
	
	$("#before").click(function(){
		//alert("Hallo dan!");
		var selection = $("li");
		var selectedCar = selection.first();		
		if ( selectedCar.text() == "Mercedes")
		{
			selectedCar.before("<li>BENTLEY CONTINENTAL GT CONVERTIBLE</li>");
		}
	});
</script>
