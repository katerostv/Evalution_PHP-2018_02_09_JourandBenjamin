<section id="insererFilm">

	<form action="#" method="post">
		
		<div>
			<label for="title">Titre du film : </label>
			<input type="text" id="title" name="title">
		</div>
		<div>
			<label for="actors">Acteurs du film : </label>
			<input type="text" id="actors" name="actors">
		</div>
		<div>
			<label for="director">Réalisateur du film : </label>
			<input type="text" id="director" name="director">
		</div>
		<div>
			<label for="producer">Producteur du film : </label>
			<input type="text" id="producer" name="producer">
		</div>
		<div>
			<label for="year_of_prod">Année de production : </label>
			<select name="year_of_prod[]" id="year_of_prod">
				<?php
					for ($i = 1990 ; $i < 2017 ; $i++) {
						echo ("<option value=".$i.">$i</option>");
					}
				?>
			</select>
		</div>
		<div>
			<label for="language">Langue du film : </label>
			<select name="language[]" id="language">
				<option value="Francais">Français</option>
				<option value="Anglais">Anglais</option>
				<option value="Espagnol">Espagnol</option>
			</select>
		</div>
		<div>
			<label for="category">Categorie du film : </label>
			<select name="category[]" id="category">
				<option value="Aventure">Aventure</option>
				<option value="Drame">Drame</option>
				<option value="Comedie">Comédie</option>
				<option value="Thriller">Thriller</option>
			</select>
		</div>
		<div>
			<label for="storyline">Synopsis : </label>
			<textarea name="storyline" id="storyline"></textarea>
		</div>
		<div>
			<label for="video">Teaser du film : </label>
			<input type="text" id="video" name="video">
		</div>
		
		
		<div>
			<input name="reset" type="reset" value="Effacer">
			<input name="insererFilm" type="submit" value="Enregistrer">
		</div>

	</form>

</section>
