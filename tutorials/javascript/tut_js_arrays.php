<h5>JS Arrays</h5>


<p id="carBrand"></p>
<button id="verwijder">verwijder</button>


<script>
	var car = ["Mercedes", "Opel", "Fiat", "Lada"];
	var carParagraaf = document.getElementById("carBrand");
	
	car.push("Lamborghini");
	car.unshift("Bugatti");
	
	function showCars()
	{
		var carAllElements = ""; 
		for (var i=0; i < car.length; i++)
		{
			carAllElements += car[i] + "<br>";
		}
		carParagraaf.innerHTML = carAllElements;
	}
	
	showCars();
	
	var button = document.getElementById("verwijder");
	
	button.onclick = function(){
		//alert("Hallo");
		var verwijdert = car.pop();
		alert("Het laatste element met de waarde: " + verwijdert + " is uit het array gehaald");
		showCars();
	};
	
	
	/*
	carParagraaf.onmouseover = function(){
		document.getElementById('carBrand').innerHTML = 'De tekst is verandert';
		alert('Dit is een onmouseover event');
	}
	
	carParagraaf.addEventListener("mouseover", function(){
		document.getElementById('carBrand').innerHTML = 'Onmouseover met een eventListener';
		alert('Dit is een onmouseover event mert eventListener');
	});
	
	button.addEventListener("click", function(){
		alert("dag");		
	});
	
	// Gebruikt onmouseover om de p tag innerHTML te veranderen
	*/
</script>