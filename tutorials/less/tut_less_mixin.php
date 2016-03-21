<h5>LESS Syntax</h5>
<hr>
<pre>
// Dit is een mixin met parameters
.customBorderBackground(@backgroundColor: #F00,
			@borderThickness: 5px,
			@lineForm: solid,
			@borderRadius: 5px)
{
	background-color: @backgroundColor;
	border:@borderThickness @lineForm darken(@backgroundColor, 5%);
	border-radius:@borderRadius;
}
</pre>
<hr>