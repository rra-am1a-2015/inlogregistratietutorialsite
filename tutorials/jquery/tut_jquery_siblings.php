<h4>JQuery Siblings</h4>
<button id="btn_1" class="button">Selecteer alleen de &lt;ul&gt; tag<br>binnen de siblingselectie</button>
<button id="btn_2" class="button">Selecteer eerstvolgende sibling<br>van de tweede paragraaf</button>
<button id="btn_3" class="button">Selecteer alle eerstvolgende<br>siblings van de &lt;ul&gt;</button>
<button id="btn_4" class="button">Selecteer de tweede t/m de vijfde<br>paragraaf na de eerste paragraaf</button>
<button id="btn_5" class="button">Selecteer vorige sibling<br>van de laatste paragraaf</button>
<button id="btn_6" class="button">Selecteer alle vorige siblings<br>vanaf de tweede paragraaf</button>
<button id="btn_7" class="button">Selecteer het tweede t/m<br>het vierde &lt;li&gt;</button>
<div id="siblings">
	<ul class="styleUl">
		<li>Een</li>
		<li>
			<ul class="styleUl">
				<li>alpha</li>
				<li>beta</li>
				<li>gamma</li>
			</ul>
		</li>
		<li>drie</li>
		<li>vier</li>
		<li>vijf</li>	
	</ul>
	
	<p>eerste paragraaf</p>
	<p>tweede paragraaf</p>
	<p>derde paragraaf</p>
	<p>vierde paragraaf</p>
	<p>vijfde paragraaf</p>
	<p>zesde paragraaf</p>
</div>
<script>
	$(document).ready(function(){
		$("[id^=btn]").css("font-size", "1em");
		$("#btn_1").click(function(){
			$("div#siblings p:first").siblings("ul").css("border", "20px solid black");
		});
		
		$("#btn_2").click(function(){
			$("div#siblings p:eq(1)").next().css("border", "20px solid black");
		});
		
		$("#btn_3").click(function(){
			$("div#siblings ul").nextAll().css("border", "20px solid black");
		});
		
		$("#btn_4").click(function(){
			$("div#siblings p:first").nextUntil("p:eq(5)").css("border", "20px solid black");
		});
		
		$("#btn_5").click(function(){
			$("div#siblings p:last").prev().css("border", "20px solid yellow");
		});
		
		$("#btn_6").click(function(){
			$("div#siblings p:eq(1)").prevAll().css("border", "20px solid yellow");
		});
		
		$("#btn_7").click(function(){
			$("div#siblings li:last").prevUntil("li:first").css("border", "20px solid yellow");
		});
		
		
		
	});
</script>