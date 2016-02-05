<h5>JS Arrays</h5>


<p id="carBrand"></p>
<button id="verwijder" >verwijder</button>


<script>
	var car = ["Mercedes", "Opel", "Fiat", "Lada"];
	var carParagraaf = document.getElementById("carBrand");
	
	var neoNumber = ["1000111100", "1010111011", "1100000011", "1000110011", "0100110011"];
	
	car.push("Lamborghini");
	car.unshift("Bugatti");
	
	function showCars(arrayVar)
	{
		var carAllElements = ""; 
		for (var i=0; i < arrayVar.length; i++)
		{
			carAllElements += arrayVar[i] + "<br>";
		}
		carParagraaf.innerHTML = carAllElements;
	}
	
	showCars(car);
	
	var button = document.getElementById("verwijder");
	
	button.onclick = function(){
		//alert("Hallo");
		var verwijdert = car.pop();
		//alert("Het laatste element met de waarde: " + verwijdert + " is uit het array gehaald");
		car.unshift(verwijdert);
		showCars(car);
	};
	
	function neoTheOne()
	{
		var verwijdert = neoNumber.pop();
		//alert("Het laatste element met de waarde: " + verwijdert + " is uit het array gehaald");
		neoNumber.unshift(verwijdert);
		showCars(neoNumber);	
	}
	
	setInterval(neoTheOne, 500);
	
	$("#carBrand").css( { color : "#59D259", 
						  backgroundColor : "black",
						  width: "100px",
						  padding: "2em"});
						  
	
	
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