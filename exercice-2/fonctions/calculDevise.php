<?php
	function calculDevise($montant,$devise){
		
		$tabErreur = array();

		if(is_numeric($montant) ==0 ) {
			array_push($tabErreur, "Merci de rentrer un nombre !");
		}

		if($devise !== "EUR" && $devise !== "USD") {
			array_push($tabErreur, "Merci de mettre la bonne devise => UNIQUEMENT EUR ou USD !");
		}

		if (count($tabErreur) != 0) {
			$message = "<ul>";

			for($i=0 ; $i < count($tabErreur) ; $i++) {
				$message .= "<li>" .$tabErreur[$i] . "</li>";
			}

			$message .="</ul>";
			echo($message);
		}

		else {
			if ($devise === "USD") {
				$resultat = $montant * 1.085965;
				echo " le resultat est  : $montant euro(s) = $resultat dollars americains";
			}
			
			else {
				$resultat = $montant / 1.085965;
				echo " le resultat est : $montant dollars americains = $resultat euro(s)";
			}

		}
	
	}
	