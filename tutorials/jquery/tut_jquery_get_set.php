<h4>JQuery Get en Set</h4>

<ul>
	<li>eerste</li>
	<li>tweede</li>
	<li>derde</li>
	<li>vierde</li>
	<li>vijfde</li>
	<li>zesde</li>
	<li>zevende</li>
</ul>

<button id="veranderTekst" class="button">Verander tekst in lijst</button>

<script>
	$("document").ready(function(){
		var textEersteLi = $("li").first().text();
		var textLaatsteLi = $("li").last().text();
		var textItemNr3 = $("li").eq(2).text();
		
		console.log(textEersteLi);
		console.log(textLaatsteLi);
		console.log(textItemNr3);
		console.log($("li").length);
		
		
		
		// 1) Maak een selector voor de button.
		// 2) Koppel het click-event aan de selector voor de button.
		// 3) Maak een anonieme functie binnen het click event om bovenstaande code uit te voeren.

		$("#veranderTekst").click(function()
		{
			//alert("De knop werkt!");
			for ( var i = 0; i < $("li").length; i++)
			{
				//console.log($("li").eq(i).text());
				$("li").eq(i).text("Dit is het item nr: " + i + " in de selectie");
			}
		});
		
	});
</script>
