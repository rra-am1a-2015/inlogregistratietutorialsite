<h4>JQuery Descendents method</h4>

<h4>Dit is een voorbeeld voor JQuery Descendents</h4>

<div>
	<ul>
		<li>Een</li>
		<li>
			<ul>
				<li>alpha</li>
				<li>beta</li>
				<li>gamma</li>
			</ul>
		</li>
		<li>drie</li>
		<li>vier</li>
		<li>vijf</li>	
	</ul>
</div>


<script>
	$(document).ready(function(){
		// 1) Definieer opmaak css voor de ul in style.php
		// 2) Gebruik de JQuery method addClass om het class attribuut .styleUl toe te voegen aan de <ul>
		
		$("ul").addClass("styleUl");
		
		
		
		$("ul:first").children("li:even").css({ margin : "1em",
								          backgroundColor : "#678823",
								          padding : "1em",
								          margin : "1em",
								          color : "white",
								          fontSize : "1.5em"});
									
		$("ul:first").children("li:odd").css({ margin : "1em",
								         backgroundColor : "#697699",
								         padding : "1em",
								         margin : "1em",
								         color : "white",
								         fontSize : "1.5em"});
										 
		$("ul:first").children("li:first").css({ backgroundColor : "#996699" });
								 
		$("ul:first").find("li:even").css({ border : "4px solid yellow"});
		
	});
</script>