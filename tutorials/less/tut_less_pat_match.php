<h3>LESS Pattern matching</h3>

<p id="patMatch">Dit is een paragraaf die verschillende opmaak krijgt afhankelijk van een LESS variabele</p>

<hr>
<pre>
@state: water;
@patMatchColor: @navSectionColor + #381;

.customPatMatch(fire, @color)
{
	background-color: darken(@color, 10%);
	border-color: darken(@color, 20%);	
	color: lighten(@color, 18%);	
}
.customPatMatch(earth, @color)
{
	background-color: darken(@color, 10%);
	border-color: darken(@color, 20%);	
	color: darken(@color, 80%);
}
.customPatMatch(air, @color)
{
	background-color: darken(@color, 10%);
	border-color: darken(@color + #328, 20%);	
	color: darken(@color + #328, 80%);
}
.customPatMatch(water, @color)
{
	background-color: darken(@color, 10%);
	border-color: darken(@color, 20%);	
	color: darken(@color, 80%);
}
.customPatMatch(@_, @_)
{
	border-width: 5px;
	border-style: solid;
	border-radius: @borderRadius;
	padding: 1em;
	margin: 1em 1em 1em 0em;
	text-align: left;
	line-height: 2em;
}
#patMatch
{
	.customPatMatch(@state,@patMatchColor);
}


</pre>
<hr>