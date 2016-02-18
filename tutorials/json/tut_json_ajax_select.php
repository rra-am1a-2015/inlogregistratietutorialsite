<h4>JSON ajax select</h4>
	
<select id="sel_broodbeleg">
	<option>--broodbeleg--</option>
	<option>hagelslag</option>
	<option>jam</option>
	<option>kaas</option>
	<option>worst</option>
	<option>pindakaas</option>
</select>


<script>
	document.getElementById("sel_broodbeleg").onmouseover = function(){
		//alert("select open");
		
		var xmlhttp = new XMLHttpRequest();
		
		xmlhttp.onreadystatechange = function(){
			//alert(xmlhttp.readyState + " | " + xmlhttp.status);
			if ( xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{
				//alert(xmlhttp.responseText
				var jsObject = JSON.parse(xmlhttp.responseText);
				
				var select = document.getElementById("sel_broodbeleg");
				
				select.innerHTML = "<option>" + jsObject.broodbeleg + "</option>";
				
			}		
		}
		
		xmlhttp.open("post", "http://localhost/am1a/tutorials/json/data_select.php", true );
		xmlhttp.send();
		
		
	} ;
</script>




