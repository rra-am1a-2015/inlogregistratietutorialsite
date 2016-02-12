<h4>JSON ajax</h4>

<p id="p-Tag">Nog geen data binnen</p>
<button id="btn_ajax" class="button">Klik hier voor data</button>

<script>

	document.getElementById("btn_ajax").onclick = function()	{
		
	// Maak een XMLHttpRequest()
	var xmlhttp = new XMLHttpRequest();
	
	// Koppel het onreadystatechange event aan het object
	xmlhttp.onreadystatechange = function(){
		alert(xmlhttp.readyState + " | " + xmlhttp.status);
		if ( xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			//alert(xmlhttp.responseText);
			
			
			var food = JSON.parse(xmlhttp.responseText);
			
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
		}		
	};
	xmlhttp.open("POST", "http://localhost/am1a/tutorials/json/data.php", true);
	xmlhttp.send();
	
	};
	
</script>




