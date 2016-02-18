<h4>JSON ajax select</h4>
	
<select id="sel_broodbeleg">
	<option>--broodbeleg--</option>
</select>


<script>
	document.getElementById("sel_broodbeleg").onmouseenter = function(){
		//alert("select open");
		
		var xmlhttp = new XMLHttpRequest();
		
		xmlhttp.onreadystatechange = function(){
			//alert(xmlhttp.readyState + " | " + xmlhttp.status);
			if ( xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{
				//alert(xmlhttp.responseText);
				var jsObject = JSON.parse(xmlhttp.responseText);
				
				// Maak een handvat op het select tag
				var select = document.getElementById("sel_broodbeleg");
				
				// lees het array uit
				output = "<option>--broodbeleg--</option>";
				for ( var i=0; i < jsObject.broodbeleg.length; i++)
				{
					output += "<option>" + jsObject.broodbeleg[i] + "</option>";
				}
				select.innerHTML = output;
				// Maak een tabel etenswaar in de database van deze site. Maak twee velden id en broodbeleg. Zet daar alle broodbelegsoorten in.
			}		
		}
		
		xmlhttp.open("post", "http://localhost/am1a/tutorials/json/data_select.php", true );
		xmlhttp.send();
		
		
	} ;
</script>




