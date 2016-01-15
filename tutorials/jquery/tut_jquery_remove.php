<h4>JQuery Tutorial Remove text</h4>

<ul>
	<li>Mercedes</li>
	<li>Fiat</li>
	<li>BMW</li>
	<li>Citroen</li>
</ul>

<button class="button" id="remove">Verwijderen onderste listItem</button>
<button class="button" id="empty">Verwijder alle listItem in een keer</button>

<script>
	$(document).ready(function(){
		
		// Het maken van een JavaScript Object...
		var ulLayout = { backgroundColor : "grey",
						 border			 : "2px solid orange",
						 listStyleType	 : "none",
						 color			 : "white",
						 padding		 : "1em"}
		
		
		$("ul").css(ulLayout);
		
		$("#remove").click(function(){
			var listItems = $("li");
			if ( listItems.length == 0)
			{
				alert("Stop nu maar met klikken, er is geen <li> meer.");
				$("#remove").text("Hier niet meer op drukken Ja!");
			}
			var lengthListItems = listItems.length;
			
			//alert(lengthListItems);
			listItems.eq(lengthListItems - 1).remove();	
			console.log($("li").length);
		});
		
		$("#empty").click(function(){
			//alert("Het werkt");
			
			$("ul").empty();
			$("ul").css("border", "0px solid red");
			$(this).text("Niet meer drukken A.U.B.");
		});
		
		
		
	});
</script>