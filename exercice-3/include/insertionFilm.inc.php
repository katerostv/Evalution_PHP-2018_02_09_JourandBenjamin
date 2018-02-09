<?php
	echo "<h1>Inserer un film : </h1>";

	if (isset($_POST['insererFilm'])) {
		$tabErreur = array();

		$title = $_POST['title'];
		$actors = $_POST['actors'];
		$director = $_POST['director'];
		$producer = $_POST['producer'];
		$year_of_prod = $_POST['year_of_prod'];
		$language = $_POST['language'];
		$category = $_POST['category'];
		$storyline = $_POST['storyline'];
		$video = $_POST['video'];
		

		if(strlen(trim($title)) < 5) {
			array_push($tabErreur, "Veuillez saisir un titre de plus de 5 caractères");
		}

		if(strlen(trim($actors)) < 5){
			array_push($tabErreur, "Veuillez saisir 5 caractères minimum pour les noms d'acteurs");
		}

		if(strlen(trim($director)) < 5){
			array_push($tabErreur, "Veuillez saisir 5 caractères minimum pour le réalisateur");
		}

		if(strlen(trim($producer)) < 5){
			array_push($tabErreur, "Veuillez saisir 5 caractères minimum pour le producteur");
		}

		if(trim($storyline) ==""){
			array_push($tabErreur, "Veuillez saisir un synopsis");
		}

		if(!filter_var($video, FILTER_VALIDATE_URL)){
			array_push($tabErreur, "Veuillez saisir une url valide");
		}

		
		if (count($tabErreur) != 0) {
			$message = "<ul>";

			for($i=0 ; $i < count($tabErreur) ; $i++) {
				$message .= "<li class=\"rouge\">" .$tabErreur[$i] . "</li>";
			}

			$message .="</ul>";
			echo($message);

			include("./include/form/formInsererFilm.php");
		}

		else {
			$connexion = connexion();
			
			$title = addslashes(htmlentities(trim($title)));
			$actors = addslashes(htmlentities(trim($actors)));
			$producer = addslashes(htmlentities(trim($producer)));
			$storyline = addslashes(htmlentities($storyline));
			
			$requete = "INSERT INTO movies (title, actors, director, producer, year_of_prod, language, category, storyline, video) VALUES ('$title', '$actors', '$director', '$producer', '$year_of_prod[0]', '$language[0]', '$category[0]','$storyline', '$video')";

			if ($resultatRequete = $connexion -> exec($requete)) {
				echo(" la fiche du film a bien été créée !");
			}

			else {
				echo("erreur de création");
			}
		
			unset($connexion);
		}

	}

	else {

		include("./include/form/formInsererFilm.php");
	}
