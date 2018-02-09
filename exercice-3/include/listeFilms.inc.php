<?php
	echo "<h1>Liste des films : </h1>";

	$connexion = connexion();

	$requete = "SELECT * FROM movies";
	$resultatRequete = $connexion->query($requete);

	echo "<table>
			<thead>
				<tr>
					<th>Titre du Film</th>
					<th>Realisateur</th>
					<th>Année de production</th>
					<th></th>
			   </tr>
			</thead>
			<tbody>";
		
			while ($row = $resultatRequete->fetch()) {
				echo "<tr>
						<td>".$row['title']."</td>
						<td>".$row['director']."</td>
						<td>".$row['year_of_prod']."</td>
						<td><a href=\"#\">voir plus >></a></td>
					</tr>";
			}

	echo "</tbody></table>";

	unset($connexion);


