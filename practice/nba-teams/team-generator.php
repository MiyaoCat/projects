<?php 
	function teamGenerator($name, $city, $conference, $record, $starPlayer, $playoffs, $logo) {
		$team = [
			"name" => $name,
			"city" => $city,
			"conference" => $conference,
			"division" => $division,
			"record" => $record,
			"starPlayer" => $starPlayer,
			"playoffs" => $playoffs,
			"logo" => $logo,
		];
		return $team;
	};
	


	$kings = teamGenerator("Kings", "Sacramento", "West", "Pacific", "30-52", "De'Aaron Fox", false, "./images/kings.png");
	$twolves = teamGenerator("Timberwolves", "Minnesota", "West", "Northwest", "46-36", "Karl-Anthony Towns", true, "./images/twolves.svg");
	$celtics = teamGenerator("Celtics", "Boston", "East", "Atlantic", "Jayson Tatum", true, "./images/celtics.png");
	$heat = teamGenerator("heat", "Miami", "East", "Southeast", "Jimmy Butler", true, "./images/heat.png");
	$spurs = teamGenerator("Spurs", "San Antonio", "West", "Southwest", "DeJaunte Murray", false, "./images/spurs.png");

	$teams = [$kings, $twolves, $celtics, $heat, $spurs];



foreach ($teams as $team) {
 	 echo $team['city'];

 }

?>

 <?php  ?>

<!--   	<li class="team">
 		<team-card>
 			<h2 class="name"><?=$team['name']?></h2>
 		</team-card>

 	</li> -->