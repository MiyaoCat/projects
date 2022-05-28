<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta property="og:image" content="[IMAGE URL]">
		<meta name="description" content="Adopt a friendly Monster TODAY!">
		<title>Adopt a Monster</title>

		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<header>
			<section class='inner-column'>
				<nav>
					<ul>
						<li>Home</li>
						<li>Monsters</li>
						<li>Contact</li>
					</ul>
				</nav>
			</section>
		</header>

		<main>
			<section class="inner-column">
			
				<h1 class='header-voice'>Adopt a Monster</h1>

				<?php 

				$codey = [
					"id" => "a001",
					"name" => "Codey",
					"color" => "Red", 
					"interest" => "scare people",
					"favoriteFood" => "peas",
					"age" => 199,
					"adopted" => true,
					"portrait" => "./images/codey.jpg",
				];

				$fragoo = [
					"id" => "a002",
					"name" => "Fragoo",
					"color" => "rose",
					"interest" => "splash in puddles",
					"favoriteFood" => "shrimp and salmon",
					"age" => 2,
					"adopted" => false,
					"portrait" => "./images/fragoo.jpg",
				];

				$lima = [
					"id" => "a003",
					"name" => "Limabean",
					"color" => "Green",
					"interest" => "garden",
					"favoriteFood" => "Lima beans",
					"age" => 7,
					"adopted" => false,
					"portrait" => "./images/limabean.jpg",
				];

				$reads = [
					"id" => "a004",
					"name" => "Miss Reads-a-lot",
					"color" => "gray",
					"interest" => "read",
					"favoriteFood" => "book worms",
					"age" => 2022,
					"adopted" => false,
					"portrait" => "./images/miss-reads-a-lot.jpg",
				];

				$banana = [
					"id" => "a005",
					"name" => "Mr Banana",
					"color" => "yellow",
					"interest" => "swing from tree branches",
					"favoriteFood" => "banana peels",
					"age" => 327,
					"adopted" => true,
					"portrait" => "./images/mr-banana.jpg",
				];

				$orangina = [
					"id" => "a006",
					"name" => "Orangina",
					"color" => "orange",
					"interest" => "bake banana pies",
					"favoriteFood" => "kumquats (but not the peel)",
					"age" => 105,
					"adopted" => false,
					"portrait" => "./images/orangina.png",
				];

				$shadow = [
					"id" => "a007",
					"name" => "Shadow",
					"color" => "purple",
					"interest" => "catch sunrays",
					"favoriteFood" => "day old worms",
					"age" => 44,
					"adopted" => true,
					"portrait" => "./images/shadow.jpg",
				];

				$monsters = [ 
					$codey, 
					$fragoo, 
					$lima, 
					$reads,
					$banana,
					$orangina,
					$shadow,
				];
			 ?>
			 <div class="card">
				<?php 
					echo "<ul>";

					foreach ($monsters as $monster) {
						$id = $monster["id"];
						$name = $monster["name"];
						$portrait = $monster["portrait"];
						$age = $monster["age"];
						$status = $monster["adopted"];

						$story = "Boo! My name is " . $monster["name"] . ". My favorite food is " . $monster["favoriteFood"] . " and I love to " . $monster["interest"] . ".";

						$message = "I have a home!";
	

						if ($status == 1) {
							$message = "I have a home!";
						} 
						


						echo "<li class='monster'>";

							echo 
								"<monster-card id='$id'>" .
									"<picture class='portrait'>" . "<img src='" . $portrait . "' . width='200'>" .
									"<h2 class='name'>" . $name . "</h2>" .
									"<h3 class='age'>" . "Age: " . $age . "</h3>" .
									"<p class='story'>" . $story . "</p>" .
									"<p class='$adopted'>" . $message . "</p>" .


								"</monster-card>";

						echo "</li>";

						
					}
					echo "</ul>";
				?>
			</div>		
			</section>
		</main>

	</body>
</html>