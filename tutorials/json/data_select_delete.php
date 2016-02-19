<?php
#Maak connectie met de database en selecteer alle records van de tabel users.
include("../../db_connect.php");

if (isset($_POST["id"]))
{
	$query = "DELETE FROM `users` WHERE `id` = '".$_POST["id"]."'";
	mysqli_query($connection, $query);
}

# Maak een select query om alle records uit de users tabel te selecteren
$query = "SELECT * FROM `users`";

$result = mysqli_query($connection, $query);

# Bepaal het aantal records dat is geselecteerd
$numberOfRecords = mysqli_num_rows($result);

# Maak een teller
$counter = 1;

$jsonString = "{ \"users\" : [";
while ( $records = mysqli_fetch_assoc($result))
{
	if ($counter < $numberOfRecords)
		$jsonString .= json_encode($records).", ";
	else
		$jsonString .= json_encode($records)." ";
	$counter++;
}
$jsonString .= "]}";
echo $jsonString;
?>