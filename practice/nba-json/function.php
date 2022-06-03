	<?php 
	

	$json = file_get_contents("clubs.json");
	$clubs = json_decode($json, true);
	// print_r($clubs);

	function prideMessage($playoffs) {
		if ($playoffs == true) {
			echo "Playoff bound!";
		} else {
			echo "better luck next year!";
		}
	}

?>


