<!DOCTYPE html>
<html>
	<head>
		<title>Ducati MotoGP</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style-motogp.css">
		<link rel="stylesheet" type="text/css" href="css/footer-global.css">
		<link rel="stylesheet" type="text/css" href="css/nav.css">
		<link rel="icon" href="img/ducati-logo.ico" />
		<link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto:wght@300;700&display=swap" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>

	<body>
		
		<header id="ctn-header">
            <div id="div-header-h1">
                <h1>MotoGP</h1>
                <nav>
                	<a href="index.php"><input class="btn btn-dark" type="submit" value="Accueil" /></a>

                	<a href="medias.php"><input class="btn btn-dark" type="submit" value="Médias" /></a>

					<a href="showroom.php"><input class="btn btn-dark" type="submit" value="Showroom" /></a>
                </nav>
            </div>
        </header>

		<div class="container description">
			<div class="row" id="resume">

				<div class="col-sm-12" id="presentation">
					<h2 id="h2-presentation">Ducati Team</h2>
					<p id="p-presentation">
						Après avoir terminé deuxième de la dernière saison MotoGP pour la deuxième année consécutive avec quatre victoires (Qatar, Brno, Misano et Valence) et neuf podiums au total (un record personnel dans la catégorie reine), le Ducati Team est prêt à se battre pour le titre, avec encore plus d'expérience sous sa ceinture. 2019 marque la douzième saison de Dovizioso en MotoGP, et la septième aux couleurs de Ducati, où il sera rejoint par Danilo Petrucci.
					</p>
				</div>

				<div class="col-sm-6" id="pilotes">
					<h3 id="h3-pilotes">Pilotes</h3>
					<p class="p-pilotes">Andrea Dovizioso<br>34 ans</p>
					<p class="p-pilotes">Danilo Petrucci<br>29 ans</p>
				</div>

				<div class="col-sm-6" id="resume-img">
					<img id="img-team-actuel" src="img/ducati-team.jpg">
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-6" id="vertical-line">
					<h3 class="h3-profils">Andrea Dovizioso</h3>
					<img class="img-profil" src="img/dovi.jpg">
					<p class="p-profil">
						Andrea Dovizioso est né le 23 mars 1986 à Forlimpopoli, dans la province de Forlì-Cesena, en Émilie-Romagne. Il mesure 1,67 m et pèse 67 kg. Sa passion pour la moto a commencé la première fois qu'il a vu son père courir en motocross le week-end. À tout juste 4 ans, son père lui fit la surprise de lui offrir une minimoto et, à l'âge de sept ans, Andrea faisait déjà des courses sur asphalte et sur terre. Deux titres de course sur route mini en 1997 et 1998 lui donnèrent sa première expérience de victoire en championnat. En 2008, à l'âge de 21 ans, Andrea Dovizioso monte comme prévu en catégorie supérieure. La RC212V de l'Italien sera donc désormais porteuse du 04 qu'il gardera aujourd'hui encore.
					</p>
					<img class="img-numero-phone" src="img/04.png">
				</div>

				<div class="col-sm-6">
					<h3 class="h3-profils">Danilo Petrucci</h3>
					<img class="img-profil" src="img/petrucci.jpg">
					<p class="p-profil">
						Danilo Petrucci est né le 4 octobre 1990 à Terni. Il a commencé à courir en 1998 avec des mini-trial et mini-cross, remportant quelques trophées nationaux. En 2006, il est passé à la course sur route en entrant dans la CBR600 Cup où il est devenu le meilleur rookie. Sa position de vice-champion de la Coupe R6 lui a accordé le soutien officiel de Yamaha Motor Italia pour les saisons suivantes. En 2008, Petrucci a disputé sa première saison internationale complète dans le championnat d'Europe Superstock 600, marquant deux pôles et obtenant la septième place au classement final. En 2009, il a remporté trois courses et obtenu la quatrième place au classement général du championnat d'Europe; au cours de la même saison, il est devenu vice-champion du championnat italien Superstock 1000 et a remporté la catégorie des moins de 23 ans.
					</p>
					<img class="img-numero-phone" src="img/9.png">
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6">
					<img class="img-numero" src="img/04.png">
				</div>

				<div class="col-sm-6">
					<img class="img-numero" src="img/9.png">
				</div>
			</div>
		</div>

		<?php include("footer-global.html"); ?>

	</body>
</html>