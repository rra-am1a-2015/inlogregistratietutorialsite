<h1>In JavaScript, objects are king. If you understand objects, you understand JavaScript.</h1>

<p id="showObjectValue"></p>

<script>
	// Dit is een javascriptobject
	var persoon = { voornaam			: "Arjan",
					tussenvoegsel		: "de",
					achternaam			: "Ruijter",
					leeftijd			: 47,
					oogkleur			: "zwart",
					mijnEersteJSMethod	: function() {
											alert("Hallo JS Object Wereld!");										  
										  },
					toonPersoonsgegevens : function() {
											return	"Voornaam: " + this.voornaam + "<br>" +
													"tussenvoegsel: " + this.tussenvoegsel + "<br>" +
													"achternaam: " + this.achternaam + "<br>" +
													"leeftijd: " + this.leeftijd + "<br>";
										  },
					lievelingsKleuren	: ["geel", "groen", "blauw"]
				  };
				  
				  
	
	var pTag = document.getElementById("showObjectValue");
	
	//pTag.innerHTML = persoon.toonPersoonsgegevens();
	persoon.mijnEersteJSMethod();
	
	pTag.innerHTML = persoon.lievelingsKleuren[2] + "<br>" + persoon.toonPersoonsgegevens();;
	
	
	
	


</script>