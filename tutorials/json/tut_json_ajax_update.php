<h4>Update record met AJAX</h4>

<div id="adjust"></div>
<div id="tblUsers"></div>

<script>
	function makeTableLayout(tblData)
	{
		var output = "<table class='table'><tr><th>id</th><th>voornaam</th><th>tussenvoegsel</th><th>achternaam</th><th>gebruikersrol</th></tr>";
		for ( var i = 0; i < tblData.users.length; i++)
		{
			output += "<tr><td id='id" + tblData.users[i].id+ "'>" + tblData.users[i].id + "</td><td id='firstname" + tblData.users[i].id + "'> " +
							tblData.users[i].firstname + "</td><td id='infix" + tblData.users[i].id + "'>" +
							tblData.users[i].infix + "</td><td id='lastname" + tblData.users[i].id + "'>" +
							tblData.users[i].lastname + "</td><td id='userrole" + tblData.users[i].id + "'>" +
							tblData.users[i].userrole + "</td><td id='img" + tblData.users[i].id + "'>" +
							"<img src='./img/b_edit.png' alt='cross' id='" + tblData.users[i].id + "'/></td></tr>";			
		}
		output += "</table>";
		
		document.getElementById("tblUsers").innerHTML = output;
		
		for ( var i = 0; i < tblData.users.length; i++)
		{
			document.getElementById(tblData.users[i].id).addEventListener("click", function(){makeUpdateTable(this)});
		}
		
		return output;
	}
	
	function makeUpdateTable(obj)
	{
		var id = obj.getAttribute("id");
		console.log("id: " + id);
		document.getElementById("adjust").innerHTML = "Id: <input type='text' value='" + 
													  document.getElementById("id" + id).innerHTML + "' readonly><br>" +
													  "voornaam: <input type='text' value='" + 
													  document.getElementById("firstname" + id).innerHTML + "' id='firstnameUpdate" + id + "''><br>" +
													  "tussenvoegsel: <input type='text' value='" + 
													  document.getElementById("infix" + id).innerHTML + "' id='infixUpdate" + id + "'><br>" +
													  "achternaam: <input type='text' value='" + 
													  document.getElementById("lastname" + id).innerHTML + "' id='lastnameUpdate" + id + "'><br>" +
													  "gebruikersrol: <select id='userroleUpdate" + id + "'>" +
													  "<option>" + document.getElementById("userrole" + id).innerHTML + "</option>" +
													  "<option>root</option>" +
													  "<option>administrator</option>" +
													  "<option>customer</option>" +
													  "<option>developer</option>" +
													  "</select>" + "<br>" +
													  "<button onclick='updateRecordAsync(" + id + ")'>Sla op!</button>";
													  
		
	}
	
	
	
	function updateRecordAsync(id)	
	{
		var firstname = document.getElementById("firstnameUpdate" + id).value;
		var infix = document.getElementById("infixUpdate" + id).value;
		var lastname = document.getElementById("lastnameUpdate" + id).value;
		var userrole = document.getElementById("userroleUpdate" + id).value;
		
		xmlhttp.open("post", "http://localhost/am1a/tutorials/json/data_select_update.php", true );
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("id=" + id + "&firstname=" + firstname + "&infix=" + infix + "&lastname=" + lastname + "&userrole=" + userrole);
		document.getElementById("adjust").innerHTML = "";
	}


	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function(){
		
		if ( xmlhttp.readyState == 4 && xmlhttp.status == 200 )
		{
			//alert(xmlhttp.responseText);
			var tblUsersData = JSON.parse(xmlhttp.responseText);
			
			//document.getElementById("tblUsers").innerHTML = makeTableLayout(tblUsersData);
			makeTableLayout(tblUsersData);
			
			//document.getElementById("rratest0").addEventListener("click", function(){makeUpdateTable(objTest)});
		}		
	}
	
	showUsers();
	
	function showUsers()
	{
		xmlhttp.open("post", "http://localhost/am1a/tutorials/json/data_select_update.php", true );
		xmlhttp.send();
	}
	
</script>

Maak het voor het emailadres en activatieveld ook mogelijk om te updaten.