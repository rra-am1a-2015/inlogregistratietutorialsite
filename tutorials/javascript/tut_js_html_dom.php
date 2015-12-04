<h4>De HTML DOM (Document Object Model)</h4>


<p id="demo" style="background-color:red;">
	Dit is mijn eerste HTML paragraaf tag die door de DOM gaat worden gewijzigd
</p>

<button id="btn" onclick="changeColor();">
						  Klik op mij!
</button>


<script type="text/javascript">
	/*alert("Mijn javascript werkt.");*/
	document.getElementById("demo").innerHTML = "Ik ga veranderd worden na het drukken op de onderstaande knop.";
	
	var lineThickness = 10;
	
	function changeColor()
	{
		lineThickness = lineThickness + 10;
		document.getElementById('demo').style.backgroundColor = 'blue';
		document.getElementById('demo').style.border = lineThickness + "px solid green";
	}
</script>