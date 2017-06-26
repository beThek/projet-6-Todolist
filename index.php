<?php
include "fonctions.php";



if(isset($_POST['submit'])) { //isset = si le bouton submit et appuyé alors le code s'execute

	include "ecrire-JSON.php";
	//On va rechercher $tachesEncode Il faut d'abord récuperer ce qu'il y a dans todo.json avant json_decode
	$stock_json_decode = json_decode($taches_encode);//transformer json en language php !!!! en array avec des objets à l'intérieur
 	//pr($stock_json_decode);

}
	//$open_file_checkBox

//	$stock_json_decode = json_decode($taches_encode);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>to do list</title>
</head>
<body>
	<section id='section1'>
		<h2>A faire:</h2>
		<form action="" method="POST">
		<?php

		if(isset($_POST['submit'])) { //isset = si le bouton submit et appuyé alors le code s'execute

		//Elle ajoute toutes les tâches au fur et à mesure et elle crée un label et input par rapport aux nombres d'objets dans le tableau

			$file = 'todo.json';
			$open_file = file_get_contents($file);
			$open_file = json_decode($open_file);

			foreach ($open_file as $key => $objets) {



		?>
			<label for="TachesAFaire"><?php echo $objets-> Afaire;?></label>
			<input type="checkbox" name="TachesAFaire" id="TachesAFaire"><br>


		<?php
			}
		}
		?>
			<input type="submit" name="save" value="Enregistrer"><br>

			<h3>Archive</h3>



		</form>
	</section>

	<section id='section2'>
		<h2>Ajouter une tâche:</h2>
		<form action="" method="POST">
		<input type="text" name="taches">
		<input type="submit" name="submit" value="Ajouter">
		</form>
	</section>
</body>
</html>
