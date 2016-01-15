<h4>Voorbeeld van addClass</h4>

<table id="tbl">
	<tr>
		<th>id</th>
		<th>voornaam</th>
		<th>tussenvoegsel</th>
		<th>achternaam</th>	
	<tr>
	<tr>
		<td>1</td>
		<td>Arjan</td>
		<td>de</td>
		<td>Ruijter</td>	
	</tr>
	<tr>
		<td>2</td>
		<td>David</td>
		<td></td>
		<td>Bowie</td>	
	</tr>
	<tr>
		<td>3</td>
		<td>Lou</td>
		<td></td>
		<td>Reed</td>	
	</tr>
	<tr>
		<td>4</td>
		<td>Mick</td>
		<td></td>
		<td>Jagger</td>	
	</tr>
	<tr>
		<td>5</td>
		<td>Iggy</td>
		<td></td>
		<td>Pop</td>	
	</tr>
</table>

<button id="btnOpmaak">Opmaak tabel</button>



<script>
	$("document").ready(function(){
		//alert("Hallo");
		$("#btnOpmaak").click(function(){
			$(this).addClass("button");
			$("#tbl").addClass("tblAddClass");
			$("#tbl td, #tbl th").addClass("tblAddClass");
			$("#tbl tr:even").addClass("tblEvenRow");
			$("#tbl tr:odd").addClass("tblOddRow");
			$("#tbl tr:first").addClass("tblHeader");
			
			$("#tbl tr:not(#tbl tr:first)").hover(function(){			
			//alert("Erop");
				$(this).addClass("tblRowActive");
			},
			function(){
				//alert("Eraf");
				$(this).removeClass("tblRowActive");
			});	
			
			if ($("#btnToggle").length == 0)
			{			
				$(this).after("<button id='btnToggle' class='button'>Toggle Opmaak</button>");
				$("#btnToggle").click(function(){
					$("#tbl tr").toggleClass("tblToggle");
				});
			}
		});
		
		

		
	});
</script>