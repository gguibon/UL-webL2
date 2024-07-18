<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Premier pas</title>
</head>
<body>
	<h1>Bonjour HTML</h1>
	<?php
	/**
	 * Correction du TD d'introduction au PHP pour le cours Web avancé de L2 MIASHS.
	 * L'ensemble de cette correction doit être lancée via un serveur PHP comme MAMP / LAMP / WAMP
	 * 
	 * Les sections sont indiquées par :
	 * // --- nom de la section ---
	 * 
	 * Les blocs de TODO utilisant le pictogramme rose sont indiqués ici par :
	 * // ---
	 * 
	 * Les cas d'usages sont indiqués par
	 * // -- nom du cas d'usage
	 * 
	 * Amusez-vous bien ! 😊
	 * 
	 * @author Gaël Guibon <https://gguibon.github.io>
	 * @date 10 avril 2023
	 * @license AGPL2.0
	 */

	// --- Votre premier script PHP ---
	echo "mon premier pas 😭";

	// --- Manipuler des chaînes de caractères ---
	$prenom = "Gaël";
	$salutation = "Salut $prenom";
	echo $salutation;
	echo "</br>";
	$salutation2 = 'Salut $prenom';
	echo $salutation2;
	echo "</br>";
	// ---
	echo strlen($prenom);
	echo "</br>";
	echo str_word_count($salutation);
	str_replace("Salut", "Yo", $salutation);
	// ---
	$exclamation = "!";
	$varconcat = $salutation . $exclamation;
	echo "$varconcat </br>";
	$varconcat .= "😊";
	echo "$varconcat </br>";

	// --- Ma,nipuler des numériques ---
	$age = 35;
	echo "$age </br>";
	$pi = 3.1415;
	echo "$pi </br>";
	echo gettype($pi) . "</br>";
	// ---
	$heure = 18.41;
	echo "$heure </br>";
	$heure = $heure / 2;
	echo "$heure </br>";
	// -- Note du bac
	$anglais = 10;
	$philo = 5;
	$math = 19; 
	$coefAnglais = 2;
	$coefPhilo = 6;
	$coefMath = 3;
	$bac = (($anglais * $coefAnglais + $philo * $coefPhilo + $math * $coefMath) / 3) / 60 * 20;
	echo "resultat du bac = $bac </br>";

	// --- Manipuler des booléens, des comparaisons et des conditions ---
	echo var_dump(true || true or true) . "</br>"; // si true alors pas exclusif
	echo var_dump(true xor true) . "</br>";
	// --- Marie Antoinette
	$pain = false;
	$brioche = false;
	$faim = true;
	if ($faim){
		if ($pain){
			echo "😋 du bon pain";
			$faim = false;
		}elseif ($brioche){
			echo "😋 de la brioche";
			$faim = false;
		}else{
			echo "🫣 Couic !";
		}
	}else{
		echo "Le peuple n'a pas faim.";
	}
	echo "</br>";

	// -- Manipuler des tableaux ---
	$artistes = array("Ismael Lo", "Lunatic", "Mylène Farmer", "Manu Dibango", "Sonny Boy Williamson");
	echo var_dump($artistes) . "</br>";
	array_push($artistes, "PNL");
	echo var_dump($artistes) . "</br>";
	array_pop($artistes);
	echo var_dump($artistes) . "</br>";
	asort($artistes);
	echo var_dump($artistes) . "</br>";
	array_unshift($artistes, "Florent Pagny");
	echo var_dump($artistes) . "</br>";
	arsort($artistes);
	echo var_dump($artistes) . "</br>";
	array_shift($artistes);
	echo var_dump($artistes) . "</br>";
	array_splice($artistes, 2, 0, "Minnie Riperton");
	echo var_dump($artistes) . "</br>";

	// --- Parcourir un tableau ---
	for ($i = 0 ; $i < count($artistes) ; $i++) {
		echo "$artistes[$i] </br>";
	}
	echo "</br>";
	for ($i = count($artistes) - 1 ; $i >= 0 ; $i--) {
		echo "$artistes[$i] </br>";
	}
	echo "</br>";
	for ($i = 0 ; $i < count($artistes) ; $i = $i+3) {
		echo "$artistes[$i] </br>";
	}
	echo "</br>";
	// -- Pas de petite économie !
	$prix = array(234, 5235, 235, 112, 98.5, 154);
	echo var_dump($prix) . "</br>";
	asort($prix);
	echo var_dump($prix) . "</br>";
	echo "</br>";

	// --- Manipuler des tableaux associatifs ---
	$moimoimoi = array("nom"=>"Guibon","prenom"=>"Gaël","age"=>35);
	echo $moimoimoi["prenom"] . "</br>"; 
	// -- Mon personnage de MMO
	$personnage = array(
		"tête"=>"Casque des abysses",
		"torse"=>"Armure fébrile",
		"jamebes"=>"Sandales",
		"sac"=>array("potion", "ordinateur"), // toujours avoir son ordi sur soi !
		"sorts"=>array(
			"feu"=>array(
				"description"=>"Une flamme incandescente vient purifier tous vos adversaires",
				"visuel"=>"🔥",
				"puissance"=>76
			)
		)
	);
	echo var_dump($personnage) . "</br>";
	echo "</br>";

	// --- Parcourir un tableau associatif ---
	foreach ($moimoimoi as $k => $v) { // k v pour key value
		echo "$v </br>";
	}
	foreach ($moimoimoi as $k => $v) { // k v pour key value
		echo "$k associé à $v </br>";
	}
	echo "</br>";
	// -- Placard à chaussures plein
	$chaussures = array(
		array(
			"nom"=>"Big Star",
			"prix"=>45.99,
			"couleur"=>"pink",
			"type"=>"Baskets basses",
			"livraison_longue_distance"=>false
		),
		array(
			"nom"=>"Keddo",
			"prix"=>44.99,
			"couleur"=>"black",
			"type"=>"Sandales compensées",
			"livraison_longue_distance"=>false
		),
		array(
			"nom"=>"New Balance",
			"prix"=>109.95,
			"couleur"=>"white",
			"type"=>"Baskets basses",
			"livraison_longue_distance"=>false
		),
		array(
			"nom"=>"Jordan",
			"prix"=>119.95,
			"couleur"=>"sunset",
			"type"=>"Baskets basses",
			"livraison_longue_distance"=>false
		),
		array(
			"nom"=>"Bershka",
			"prix"=>35.99,
			"couleur"=>"black",
			"type"=>"Sandales à plaeforme",
			"livraison_longue_distance"=>true
		),
		array(
			"nom"=>"Bershka",
			"prix"=>19.99,
			"couleur"=>"gold",
			"type"=>"Sandales",
			"livraison_longue_distance"=>true
		)
	);
	echo var_dump($chaussures) . "</br>";

	?>
</body>
</html>

