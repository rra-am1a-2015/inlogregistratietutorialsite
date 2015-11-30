<h4>De HTML DOM (Document Object Model)</h4>

He hallo ja jij daar ga is even veranderen



<p id="demo" style="background-color:red;">Dit is mijn eerste HTML paragraaf tag die door de DOM gaat worden gewijzigd</p>
<button id="btn" onclick="changeColor();">Klik op mij!</button>

<script type="text/javascript">
	/*alert("Mijn javascript werkt.");*/
	document.getElementById("demo").innerHTML = "Ik heb je veranderd.";
	
	var lineThickness = 10;
	
	function changeColor()
	{
		lineThickness = lineThickness + 10;
		document.getElementById('demo').style.backgroundColor = 'blue';
		document.getElementById('demo').style.border = lineThickness + "px solid green";
	}
</script>