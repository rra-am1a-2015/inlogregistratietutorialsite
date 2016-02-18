<?php
	include("../../db_connect.php");
	$query = "SELECT * FROM `etenswaren`";
	
	$result = mysqli_query($connection, $query);
	
	$counter = 1;
	$numberOfRecords = mysqli_num_rows($result);
	$output = "{ \"broodbeleg\" : [";
	while ( $records = mysqli_fetch_assoc($result) )
	{
		if ($counter < $numberOfRecords )
		{
		$output .= "\"".$records["broodbeleg"]."\", ";
		}
		else
		{
			$output .= "\"".$records["broodbeleg"]."\"";
		}
		$counter++;
	}
	$output .= "]}";
	echo $output;
?>