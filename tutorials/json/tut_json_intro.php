<h4>JSON intro</h4>

<p id="p-Tag">Nog geen data binnen</p>
<button id="btn_ajax" class="button">Klik hier voor data</button>

<script>

	document.getElementById("btn_ajax").onclick = function()	{
		
	// Mijn eerste json string
	var jsonFood = '{ "ontbijt" : "havermout", "lunch" : "brood", "diner" : "falafel", "beoordelingEten" : [ 8.7, 4.5, 3.5], "drank" : {"koffie" : "expresso", "zuivel" : "karnemelk", "avonddrank" : "Yoghurt"}, "eetTijden" : [ {"ontbijt" : "4:00"}, {"lunch" : "12:00"}, {"diner" : "21:00"}], "lekkerGegeten" : false, "sapperdeflap" : null }';
	
	
	var food = JSON.parse(jsonFood);
	
	var pTag = document.getElementById("p-Tag");
	var outputString = "Ontbijt: " + food.ontbijt + "<br>" + 
					   "Ik geef mijn ontbijt een: " + food.beoordelingEten + "<br>" +
					   "Ik drink altijd een 6 dubbele " + food.drank.koffie + "<br>" +
					   "In de middag drink ik altijd een halve liter " + food.drank.zuivel + "<br>" +
					   "s'Avonds drink ik altijd een liter " + food.drank.avonddrank + "<br>" +
					   "Het ontbijt is om:" + food.eetTijden[0].ontbijt + "<br>" + 
					   "De lunch is om:" + food.eetTijden[1].lunch + "<br>" +
					   "Het diner is om:" + food.eetTijden[2].diner + "<br>" +
					   "Is de bewering 'ik heb lekker gegeten waar': " + food.lekkerGegeten + "<br>" +
					   "Wat is de waarde van dit nutteloze veld: " + food.sapperdeflap; 
					 
	pTag.innerHTML = outputString;		
	};
	
</script>




