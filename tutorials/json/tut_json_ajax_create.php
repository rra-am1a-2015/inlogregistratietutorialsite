<h4>JSON AJAX invoegen record in database</h4>
<p>broodbeleg</p>
<input type="text" id="broodbeleg" />
<button id="btn_create">Sla op in database!</button>


<script>
	// Maak een handvat op de button en voeg een click event toe.
	
	var btn_handle = document.getElementById("btn_create");
	btn_handle.onclick = function(){
		
		var input = document.getElementById("broodbeleg");
		var inputText = input.value;
		
		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function(){
			
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{
				
				alert(xmlhttp.responseText);
			}
		}
		
		xmlhttp.open("post", "http://localhost/am1a/tutorials/json/data_select_create.php", true );
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("input=" + inputText);
		
	}

</script>