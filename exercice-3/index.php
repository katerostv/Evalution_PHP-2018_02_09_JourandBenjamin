<?php

/*
Vous travaillez pour un cinéma et devez créer une base de données de film. Votre base de
données s’appellera « exercice_3 ». Vous devrez ensuite créer un script qui permettra
d’ajouter et d’afficher des films. Suivez les étapes. 

Étape 1 :
Cette table, nommée “movies” sera composée des champs suivants :
● title (varchar) : le nom du film
● actors (varchar) : les noms d’acteurs
● director (varchar) : le nom du réalisateur
● producer (varchar) : le nom du producteur
● year_of_prod (year) : l’année de production
● language (varchar) : la langue du film
● category (enum) : la catégorie du film
● storyline (text) : le synopsis du film
● video (varchar) : le lien de la bande annonce du film
N’oubliez pas de créer un ID pour chaque film et de l’auto-incrémenter. 

Étape 2 :
Créer un formulaire permettant d’ajouter un film et effectuer les vérifications nécessaires. 

Prérequis :
● Les champs “titre, nom du réalisateur, acteurs, producteur et synopsis” comporteront
au minimum 5 caractères.
● Les champs : année de production, langue, category, seront obligatoirement un
menu déroulant
● Le lien de la bande annonce sera obligatoirement une URL valide
● En cas d’erreurs de saisie, des messages d’erreurs seront affichés en rouge
Chaque film sera ajouté à la base de données créée. Un message de réussite confirmera
l’ajout du film. 

Étape 3 :
Créer une page listant dans un tableau HTML les films présents dans la base de données.
Ce tableau ne contiendra, par film, que le nom du film, le réalisateur et l’année de
production.
Une colonne de ce tableau contiendra un lien « plus d’infos » permettant de voir la fiche
d’un film dans le détail. 

Étape 4 :
Créer une page affichant le détail d’un film de manière dynamique. Si le film n’existe pas,
une erreur sera affichée. 

*/

	session_start();

	include_once "./fonctions/connexion.php"; 
	include_once "./fonctions/callPage.php";

	include_once "./bin/conf_connexion.php"; //fichier de définition des constantes de connexion à la BDD

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<link rel="stylesheet" href="./assets/css/style.css">

	<!-- appel TinyMCE -->
	<script src="./assets/js/tinymce/tinymce.min.js"></script>
	<script>tinymce.init({ 
		    selector: 'textarea',
			branding: false});</script>
						
	<title>LES FILMS</title>
</head>

	<body>

		<?php	include_once("./include/header.php"); ?>

			<main>
				<?php
					callPage();
				?>
			</main>
			
		<?php	include_once("./include/footer.php"); ?>

		</div>
	</body>

	<!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">
	
</html>


