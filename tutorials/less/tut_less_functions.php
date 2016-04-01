<h3>Dit is een voorbeeld van less functions</h3>
<p id="replace">Dit is een voorbeeld van een less function<p>
<hr>
<pre>
@border: "1px solid rgb(23, 34, 45)";

.replaceMixin(@bkCol)
{
	background-color: rgb(134, 223, 245);
	border: e(replace(@bkCol, "px", "em"));

}
.replaceMixin(@_)
{
	margin: 1em 1em 1em 0em;
	padding: 1em;
	font-size:2em;
}


#replace
{
	.replaceMixin(@border);
}
</pre>
<hr>