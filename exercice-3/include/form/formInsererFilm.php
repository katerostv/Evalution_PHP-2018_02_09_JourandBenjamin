<section id="insererFilm">

	<form action="#" method="post">
		
		<div>
			<label for="titreArticle">Titre du film : </label>
			<input type="text" id="titreFilm" name="title"/>
		</div>

		
		
		<?php

		$connexion = connexion();
		$requete = "SELECT * FROM T_CATEGORIES";

		$row = $connexion->query($requete);

		echo ("<div id=\"categories\">");
			echo("<label for=\"categorieArticle\">Catégories de l\'article : </label>");
			echo("<ul>");

			while($checkbox_categorie = $row -> fetch()){
				echo "<li><input type=\"checkbox\" name=\"categoriesArticle[]\" id=\"categoriesArticle\" value=\" ". $checkbox_categorie['ID_CATEGORIE'] . "\">". $checkbox_categorie['CATLIBELLE'] ."</input></li>";
			}

			echo ("</ul>");
		echo("</div>");

		echo("<div>");
			echo("<input name=\"reset\" type=\"reset\" value=\"Effacer\"/>");
			echo("<input name=\"creerArticle\" type=\"submit\" value=\"enregistrer\"/>");
		echo("</div>");			
	echo("</form>");

	unset($connexion); 
echo("</section>");
