<h4>Update record met AJAX</h4>

<div id="adjust"></div>
<div id="tblUsers"></div>

<script>
	function makeTableLayout(tblData)
	{
		var output = "<table class='table'><tr><th>id</th><th>voornaam</th><th>tussenvoegsel</th><th>achternaam</th><th>gebruikersrol</th></tr>";
		for ( var i = 0; i < tblData.users.length; i++)
		{
			//var imageTag = document.createElement("img");
			//var objTest = {"voornaam" : "Arjan", "achternaam" : "Ruijter"};
			//console.log(tblData.users[i]);
			//imageTag.setAttribute("src", "./img/b_edit.png");
			//imageTag.setAttribute("alt", "cross");
			//var objTest = tblData.users[i];
			//console.log(objTest);
			
			//imageTag.addEventListener("click", function(){makeUpdateTable(tblData.users[i])});
			//document.getElementById("adjust").appendChild(imageTag);
			output += "<tr><td>" + tblData.users[i].id + "</td><td> " +
							tblData.users[i].firstname + "</td><td>" +
							tblData.users[i].infix + "</td><td>" +
							tblData.users[i].lastname + "</td><td>" +
							tblData.users[i].userrole + "</td><td>" +
							"<img src='./img/b_edit.png' alt='cross' id='" + tblData.users[i].id + "'/></td></tr>";
			//document.getElementById("rratest" + i).addEventListener("click", function(){makeUpdateTable(objTest)});

			
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
		console.log("Dit is het img tag waar ik op heb geklikt: " + id);
		//alert(testing);
	}
	
	function updateRecordAsync(id)	
	{
		xmlhttp.open("post", "http://localhost/am1a/tutorials/json/data_select_update.php", true );
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("id=" + id);
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
	
	xmlhttp.open("post", "http://localhost/am1a/tutorials/json/data_select_update.php", true );
	xmlhttp.send();
</script>