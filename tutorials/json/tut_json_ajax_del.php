<h4>Delete record met AJAX</h4>

<div id="tblUsers"></div>

<script>
	function makeTableLayout(tblData)
	{
		
		return "";
	}


	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function(){
		
		if ( xmlhttp.readyState == 4 && xmlhttp.status == 200 )
		{
			alert(xmlhttp.responseText);
			var tblUsersData = JSON.parse(xmlhttp.responseText);
			
			 document.getElementById("tblUsers").innerHTML = makeTableLayout(tblUsersData);	
		}		
	}
	
	xmlhttp.open("post", "http://localhost/am1a/tutorials/json/data_select_delete.php", true );
	xmlhttp.send();
</script>