	<?php 
	

	$json = file_get_contents("clubs.json");
<<<<<<< HEAD
	// $clubs = json_decode($json, true);
	// print_r($clubs);

=======
	$clubs = json_decode($json, true);
	// print_r($clubs);

	function prideMessage($playoffs) {
		if ($playoffs == true) {
			echo "Playoff bound!";
		} else {
			echo "better luck next year!";
		}
	}
>>>>>>> save if/else function for nba card

?>


