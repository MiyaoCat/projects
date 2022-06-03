
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:image" content="[IMAGE URL]">
	<meta name="description" content="NBA team cards using PHP">
	<title>NBA Teams</title>

	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<header>
		<section class='inner-column'>
			
		</section>
	</header>

	<main>
		<section class="inner-column">
			<?php include('team-generator.php'); ?> 
			<ol class="team-list">
				
					<?php foreach ($teams as $team) { 
						$message = "Playoff bound!";

						if ($team['playoffs'] == false) {
			 						$message = "We suck!";
						} 	
					?>
						<li>
							<team-card>
								<li><h2 style="font-size: 22px">Team: <?=$team['name'];?></h2></li>
								<li>City: <?=$team['city'];?></li>
								<li>Conference: <?=$team['conference'];?></li>
								<li>Division: <?=$team['division'];?></li>
								<li>Record: <?=$team['record']; ?></li>
								<p><?=$message ?></p>
							</team-card>
						</li>

					<?php } ?>	
				
			</ol>	
		</section>

	</main>

	<footer>
		<section class="inner-column">
			
		</section>
	</footer>
</body>