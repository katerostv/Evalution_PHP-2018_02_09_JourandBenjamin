<?php

function connexion() {
	try {
		$db = new PDO(URL, LOGIN, PASSWORD);		
		return $db;
	}

	catch (PDOException $e) {
		echo ($e -> getMessage());
	}

}
