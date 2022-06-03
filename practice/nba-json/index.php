
	<main>
		<section class="inner-column">
<<<<<<< HEAD
			<?php include('clubs.json'); ?> 
=======
			<?php include('team-generator.php'); ?> 
>>>>>>> save if/else function for nba card
			<ol class="team-list">
				
					<?php foreach ($clubs as $club) { ?>
						<li>
							<team-card>
										
<<<<<<< HEAD
								<?=$club['location']?><
								
=======
								<?=$club['simpleName']?>
								<p><?=prideMessage($team['playoffs']) ?></p>
>>>>>>> save if/else function for nba card
							</team-card>
						</li>

					<?php } ?>	
				
			</ol>	
		</section>

	</main>