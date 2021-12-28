<!DOCTYPE html>
<html>
	<head>
		<title>Ducati Home</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style-index.css">
		<link rel="stylesheet" type="text/css" href="css/footer-global.css">
		<link rel="icon" href="img/ducati-logo.ico" />
		<link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto:wght@300;700&display=swap" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>

	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 id="ducati">DUCATI</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">

						<a href="medias.php"><input class="btn btn-dark" type="submit" value="Médias" /></a>

						<a href="showroom.php"><input class="btn btn-dark" type="submit" value="Showroom" /></a>

						<a href="motogp.php"><input class="btn btn-dark" type="submit" value="Moto GP" /></a>

					</div>
				</div>
			</div>
		</header>


		<article>
			<div class="jumbotron" id="by-night-jumbo">
				<div class="row" id="alignment-text-center">
					<div class="col-sm-6">
						<a href="by-night.php"><img id="by-night-img" src="img/by-night-zoom.jpg"></a>
					</div>

					<div class="col-sm-6">
						<h2 id="by-night-h2">Ducati By Night</h2>
						<p id="by-night-slogan">La nuit est à vous</p>
						<p id="by-night-p">L'inscription à la 15ème édition By Night est dès à présent ouverte !</p>
						<a href="by-night.php"><input class="btn btn-danger" id="by-night-btn" type="submit" value="En savoir plus" /></a>
					</div>
				</div>
			</div>
		</article>

		<article>
			<div class="jumbotron" id="v4s-jumbo">
				<div class="row" id="alignment-flex">
					<h2 id="v4s-h2">Panigale V4S 2020</h2>
					<p class="v4s-slogan">La nouvelle Panigale V4 dans sa version S est disponible.</p>
					<p class="v4s-slogan" id="v4s-slogan2">Améliorations majeures :</p>
					<ul id="v4s-listing">
						<li>Pack Aérodynamique hérité de la V4R 2019</li>
						<li>Antipatinage DTC EVO2</li>
						<li>Rigidité du cadre et du train avant modifié</li>
						<li>Nouvelles Cartographies</li>
						<li>Injection revisitée</li>
						<li>Evolution du shifter up and down</li>
						<li>Poids descendu à 175KG à sec</li>
					</ul>
					<p id="v4s-tarif">Tarif : 23 290€ à 28 890€</p>
					<input class="btn btn-danger" id="v4s-btn" type="submit" value="En savoir plus" />
				</div>
			</div>
		</article>

		<?php include("footer-global.html"); ?>

	</body>
</html>
