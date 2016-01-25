<h4>jQuery UI Datepicker</h4>
<h5>Kies en datum: </h5>
<input type="text" id="datepicker"/><br>
<button class="button" id="wijzigJaartal">Wijzig jaartal</button>

<script>
	$(document).ready(function(){
		var datepickerTweak = { dateFormat		: "dd-mm-yy",
								dayNamesMin		: [ "zo", "ma", "di", "wo", "do", "vr", "za" ],
								firstDay		: 1,
								monthNamesShort : ["jan", "feb", "maa", "apr", "mei", "jun", "jul", "aug", "sep", "okt", "nov", "dec"],
								yearRange		: "1896:2016"
							  };
		
		
		var datum = new Date();					  
		var day = datum.getDate();
		
		var month = datum.getMonth();
		month += 1;
		if ( month < 10 )
		{			
			month = "0" + month;
		}		
		var year = datum.getFullYear();
		var date = day + "-" + month + "-" + year;
		
		
	
		$("#datepicker").datepicker( datepickerTweak );
		$("#datepicker").datepicker("setDate", date );
		
		
		$("#wijzigJaartal").click(function(){
			$("#datepicker").datepicker("option", "changeYear", true )
							.datepicker("option", "changeMonth", true)
							.datepicker();
		});
	});
</script>