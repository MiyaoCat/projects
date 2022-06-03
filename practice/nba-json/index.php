
	<main>
		<section class="inner-column">
			<?php include('team-generator.php'); ?> 
			<ol class="team-list">
				
					<?php foreach ($clubs as $club) { ?>
						<li>
							<team-card>
										
								<?=$club['simpleName']?>
								<p><?=prideMessage($team['playoffs']) ?></p>
							</team-card>
						</li>

					<?php } ?>	
				
			</ol>	
		</section>

	</main>