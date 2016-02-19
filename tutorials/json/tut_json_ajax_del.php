<h4>Delete record met AJAX</h4>

<div id="tblUsers"></div>

<script>
	function makeTableLayout(tblData)
	{
		$output = "";
		for ( var i = 0; i < tblData.users.length; i++)
		{
			$output += tblData.users[i].id + " | " +
					   tblData.users[i].firstname + " | " +
					   tblData.users[i].infix + " | " +
					   tblData.users[i].lastname + " | " +
					   tblData.users[i].userrole + " | " +
					   "<img src='./img/b_drop.png'	 alt='cross' onclick='deleteRecordAsync(" + tblData.users[i].id + ");'/><br>";
		}
		return $output;
	}
	
	function deleteRecordAsync(id)
	{
		xmlhttp.open("post", "http://localhost/am1a/tutorials/json/data_select_delete.php", true );
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("id=" + id);
	}


	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function(){
		
		if ( xmlhttp.readyState == 4 && xmlhttp.status == 200 )
		{
			//alert(xmlhttp.responseText);
			var tblUsersData = JSON.parse(xmlhttp.responseText);
			
			document.getElementById("tblUsers").innerHTML = makeTableLayout(tblUsersData);	
		}		
	}
	
	xmlhttp.open("post", "http://localhost/am1a/tutorials/json/data_select_delete.php", true );
	xmlhttp.send();
</script>