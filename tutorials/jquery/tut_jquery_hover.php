<h4>JQuery Hover demo</h4>
<form>
	<input type="text" name="naam" /><br>
	<input type="submit" name="submit" />
</form>

<script>
	$(document).ready(function(){
		//alert("Het werkt!!!");
		$("input").css({"border" : "2px solid red"});
	});
</script>