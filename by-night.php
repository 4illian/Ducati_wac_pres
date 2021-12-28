<!DOCTYPE html>
<html>
	<head>
		<title>Ducati By Night</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style-by-night.css">
		<link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto:wght@300;700&display=swap" rel="stylesheet">
		<link rel="icon" href="img/ducati-logo.ico" />
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>

	<body>

		<a href="index.php"><i class="fa fa-home" id="chevron-back" aria-hidden="true"></i></a>


		<div class="container">
			<div class="row">

				<div class="col-sm-6" id="height-left">
					<h1 id="h1-by-night">Ducati<br>By<br>Night</h1>
					<p id="description">
						Ducati vous invite à une sortie nocturne autour de la ville de Toulon le 17 Juin 2064.
						Le rendez-vous est fixé à 21h00 au Ducati Toulon et durera environ 3h. Elle se terminera au bar motard.
					 	Vous devez être inscrit pour pouvoir y participer.
					 </p>
				</div>

				<div class="col-sm-4" id="formulaire">
					<h2 id="h2-participer">Vous souhaitez participer ?</h2>
					<form method="post" action="inscription.php">
				    	<fieldset>
				    		<legend>Vos Coordonnées</legend>
				        
					        <label for="nom">Nom :</label>
						    <input class="form-control" type="text" name="nom" id="nom" maxlength="20" required/>

						    <label for="prenom">Prénom :</label>
						    <input class="form-control" type="text" name="prenom" id="prenom" maxlength="20"/>

						    <label for="numero">Téléphone :</label>
						    <input class="form-control" type="tel" maxlength="10"/>

						    <label for="mail">Mail :</label>
						    <input class="form-control" type="email" maxlength="40" required/>


				            <label for="modele">Quel modèle de Ducati avez-vous ?</label>
				       		<select class="form-control" name="modele" id="modele">

							    <optgroup label="Hypermotard">
							        <option value="hypermotard950">Hypermotard 950</option>
							        <option value="hypermotard1100">Hypermotard 1100</option>
							        <option value="hypermotard1200">Hypermotard 1200</option>
							    </optgroup>

								<optgroup label="V4">
									<option value="v4">V4</option>
								    <option value="v4s">V4S</option>
								    <option value="v4r">V4R</option>
								</optgroup>

								<optgroup label="Sportives">
								    <option value="hypersport">Hypersport</option>
								    <option value="1098">1098</option>
								    <option value="1199">1199</option>
								</optgroup>

								<optgroup label="Multistrada">
								    <option value="multistrada600">Multistrada 600</option>
								    <option value="multistrada700">Multistrada 700</option>
								    <option value="multistrada950">Multistrada 950</option>
								    <option value="multistrada1100">Multistrada 1100</option>
								    <option value="multistrada1260">Multistrada 1260</option>
								</optgroup>

								<optgroup label="Scrambler">
								    <option value="scrambler400">Scrambler 400</option>
								    <option value="scrambler800">Scrambler 800</option>
								    <option value="scrambler1100">Scrambler 1100</option>
								</optgroup>
				       		</select>
				    	</fieldset>

						<input class="btn btn-danger" type="submit" value="Valider" />
					</form> 

				</div> <!-- col -->

			</div> <!-- row -->
		</div> <!-- container -->
	</body>
</html>