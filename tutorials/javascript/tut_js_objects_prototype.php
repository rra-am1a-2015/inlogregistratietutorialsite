<p><h4>JS Objects prototype</h4></p>

<p id="p-prototype"></p>

<script>

// Dit is een prototype function voor javascript objecten van het type game.
function game(name, genre, price, rating)
{
	this.name = name;
	this.genre = genre;
	this.price = price;
	this.rating = rating;
	this.hallo = function()
	{
		alert("Hallo");
	}
	this.reviews = [this.name, "Beste game ooit!", "Super schamend slecht!!"];
	this.showReviews = function(){
		var txt = "";
		for (var i = 0; i < this.reviews.length; i++)
		{
			txt += this.reviews[i] + "<br>";
		}
		return txt;
	}
}

game.prototype.showInfo = function()
{
	//alert("doei");
	return		"Naam game: " + this.name + "<br>" +
			    "Genre game: " + this.genre + "<br>" +
				"Rating game: " + this.rating + " sterren<br>" +
				"Reviews van: " + this.showReviews() + 
			    "Prijs game: &euro; " + this.price + "<hr>";	
}

//game.prototype.rating = 4;


var eersteGame = new game("Kingsvalley I", "platformer", 0.85, 3);
var tweedeGame = new game("Pyramid Panic", "doolhofgame", 0.00, 5);
var derdeGame = new game("Tomb Raider I", "adventuregame", 21.99, 5);
var vierdeGame = new game("Frogger", "arcadegame", 1.00, 2);

var games = [eersteGame, tweedeGame, derdeGame, vierdeGame];

var output = "";
for ( var i = 0; i < games.length; i++)
{
	output += games[i].showInfo();	
}

var pProtoTxt = document.getElementById("p-prototype");
pProtoTxt.innerHTML = output;
</script>