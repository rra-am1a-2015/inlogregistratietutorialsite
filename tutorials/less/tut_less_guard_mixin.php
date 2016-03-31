<h3>LESS Guarded Mixin example</h3>

<p id="guardMixin">Dit is een paragraaf die via een guarded mixin zijn opmaak verkrijgt</p>

<p id="guardMixinOff">Om de opmaak voor deze guarded mixin te laten toepassen moet aan de ene voorwaarde worden voldaan of de andere</p>

<hr>
<pre>
@fontsize: 21;


.guardMixinOff(@fontsize) when (@fontsize = 10), (@fontsize = 20)
{
	border: 10px solid black;
	font-size: @fontsize;
}
.guardMixinOff(@_)
{
	margin: 1em 1em 1em 0em;
	padding: 1em;
}

#guardMixinOff
{
	.guardMixinOff(@fontsize)
}

</pre>
<hr>