
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

<!-- 	<main>
		<section class="inner-column"> -->
				<?php include('team-data.php'); ?> 

				<?php 
					function playoffsTag($something) {
						if ($something) {
							return "<p class='in-playoffs'> Playoffs!</p>";
						}
					}
					function playoffsClass($inPlayoffs) {
						if ($inPlayoffs) {
							return "playoff-bound";
						}
					}
				?>
			<ol class="team-list">	
				<?php foreach ($teams as $team) { 
					$style = playoffsClass($team['playoffs']);
				?>
				<li class="team <?=$style?>">
					
					<team-card>
						<h2>Team: <?=$team['name'];?></h3>
						<p><?=$team['city'];?></p>
						<?=playoffsTag($team['playoffs'])?>
					</team-card>
				</li>
				<?php } ?>
			</ol>	
<!-- 		</section>

	</main> -->

	<footer>
		<section class="inner-column">
			
		</section>
	</footer>
</body>