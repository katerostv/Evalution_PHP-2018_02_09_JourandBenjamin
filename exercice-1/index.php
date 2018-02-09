<?php
	/* ----------------------------------------------------------------------------------------
		Exercice 1 : « On se présente ! »
		Créer un tableau en PHP contenant les infos suivantes :
		● Prénom 
		● Nom
		● Adresse
		● Code Postal
		● Ville
		● Email
		● Téléphone
		● Date de naissance au format anglais (YYYY-MM-DD)

		A l’aide d’une boucle, afficher le contenu de ce tableau (clés + valeurs) dans une liste
		HTML.

		La date sera affichée au format français (DD/MM/YYYY).
		
		Bonus :
		
		Gérer l’affichage de la date de naissance à l’aide de la classe DateTime 
	--------------------------------------------------------------------------------------------- */

// déclaration du tableau de présentation

	$infosIndividu = array(
		"Prenom" => "Benjamin",
		"Nom" => "JOURAND",
		"Adresse" => "4 rue Rosa Parks",
		"Code Postal" => "76150",
		"Ville" => "Maromme",
		"Email" => "benjamin.jourand@gmail.com",
		"Telephone" => "06.17.42.34.67",
		"Date de naissance" => "1981-08-04"
	);

// affichage dans un liste Html
?>

<html lang="fr">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Je me présente</title>
	</head>

	<body>

		<h3>Bonjour, voici mes infos personnelles :</h3>
		<ul>
			

			<?php

				// convertion de la date de naissance en format FR : 

				$infosIndividu["Date de naissance"] = date('d/m/Y', strtotime($infosIndividu["Date de naissance"]));

				foreach($infosIndividu as $key => $value) {
					echo "<li>$key : $value</li>";
				}
			?>
		</ul>
	</body>

</html>

