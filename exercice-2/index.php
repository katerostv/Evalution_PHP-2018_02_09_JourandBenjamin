<?php

/* ----------------------------------------------------------------------------------------

	Créer une fonction permettant de convertir un montant en euros vers un montant en dollars
	américains.
	Cette fonction prendra deux paramètres :
	● Le montant de type int ou float
	● La devise de sortie (uniquement EUR ou USD).
	Si le second paramètre est “USD”, le résultat de la fonction sera, par exemple :
	1 euro = 1.085965 dollars américains
	Il faut effectuer les vérifications nécessaires afin de valider les paramètres. 

--------------------------------------------------------------------------------------------- */

include_once "./fonctions/calculDevise.php";

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="./assets/css/style.css">

		<title>Calcul de devise</title>

	</head>
	<body>
		<h3>Calcul de devise : </h3>
		<section id="formulaire">
			<form action="#" method="POST">
				<div id="montant">
					<label for="montant">Entrez le montant à convertir : </label>
					<input type="text" name="montant" placeholder="euros/USD"/>
				</div>
				<div id="devise">
					<label for="devise">Choississez votre devise (uniquement EUR ou USD) </label>
					<input type="text" name="devise" placeholder="EUR/USD"/>
				</div>
				<div>
					<input type="submit" name="convertirDevise" value="convertir"/>
				</div>
			</form>
		</section>

		<section id="resultat">
			<?php

			if(isset($_POST["convertirDevise"])) {

				$devise = $_POST["devise"];
				$montant = $_POST["montant"];

				
				calculDevise($montant, $devise);
			}

			?>
		</section>
	</body>
</html>
