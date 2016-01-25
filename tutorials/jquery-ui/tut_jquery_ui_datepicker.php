<h4>jQuery UI Datepicker</h4>
<h5>Kies en datum: </h5>
<input type="text" id="datepicker"/>

<script>
	$(document).ready(function(){
		var getal = 5;
		var datepickerTweak = { dateFormat : "dd-mm-yy"};
	
		$("#datepicker").datepicker( datepickerTweak );	
	});
</script>