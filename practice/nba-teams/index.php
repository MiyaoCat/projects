
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
				<?php foreach ($teams as $team) { ?>
				<li><h2><?=$team['name'];?></h2></li>
				<li class="<?=$city ?>">City: <?=$team['city'];?></li>

				<?php } ?>	
		</section>

	</main>

	<footer>
		<section class="inner-column">
			
		</section>
	</footer>
</body>