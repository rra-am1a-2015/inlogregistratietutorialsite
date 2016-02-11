<p><h4>JS Objects prototype</h4></p>

<p id="p-prototype"></p>

<script>

// Dit is een prototype function voor javascript objecten van het type game.
function game(name, genre, price)
{
	this.name = name;
	this.genre = genre;
	this.price = price;	
}


var eersteGame = new game("Kingsvalley I", "platformer", 0.85);
var tweedeGame = new game("Pyramid Panic", "doolhofgame", 0.00);
var derdeGame = new game("Tomb Raider I", "adventuregame", 21.99);
var vierdeGame = new game("Frogger", "arcadegame", 1.00);

var games = [eersteGame, tweedeGame, derdeGame, vierdeGame];

var output = "";
for ( var i = 0; i < games.length; i++)
{
	output += "Naam game: " + games[i].name + "<br>";
	
}

var pProtoTxt = document.getElementById("p-prototype");
pProtoTxt.innerHTML = output;
</script>