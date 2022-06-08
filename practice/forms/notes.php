<?php 
	$emailA = "joe@place.com";
	$emailB = "joe@place.com";


	if (SUBMITTED) {
		if (first) {
			$emailA = "joe@place.com";
		}
	}

	if ( $emailA != $emailB ) {
		$errorMessage = "<p class='error'>Your emails do not match</p>";
	}


 ?>

 <input type="text" required='true'>