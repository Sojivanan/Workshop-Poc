<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
		echo '<p>Nom: ' . $_POST['nom'] . '</p>';
		echo '<p>Prénom: ' . $_POST['prenom'] . '</p>';
		echo '<p>Âge: ' . $_POST['age'] . '</p>';
		echo '<p> Profession: ' . $_POST['profession'] . '</p>';
		echo '<p> Situation familiale: ' . $_POST['situation-familiale'] . '</p>';

		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$age = $_POST['age'];
		$profession = $_POST['profession'];
		$situationfamiliale = $_POST['situation-familiale'];

		echo"<div class='tranche'>";
		if ($age >= '10' && $age <= '20') {
			echo "Tranche d'âge 30-40ans: ";
			echo"<div class='tranche'>";
			echo "Tranche d'âge 20-30ans: ";
			echo" </div> ";
			echo"<div class='tranche'>";
			echo "Tranche d'âge 10-20ans: ".$_POST['nom']." ".$_POST['prenom']." ".$_POST['age']." ".$_POST['profession']." ".$_POST['situation-familiale'];
			echo" </div> ";
		}

		if ($age >= '20' && $age <= '30') {
			echo "Tranche d'âge 30-40ans: ";
			echo"<div class='tranche'>";
			echo "Tranche d'âge 20-30ans: ".$_POST['nom']." ".$_POST['prenom']." ".$_POST['age']." ".$_POST['profession']." ".$_POST['situation-familiale'];
			echo" </div> ";
			echo"<div class='tranche'>";
			echo "Tranche d'âge 10-20ans: ";
			echo" </div> ";
		}

		if ($age >= '30' && $age <= '40') {
			echo "Tranche d'âge 30-40ans: ".$_POST['nom']." ".$_POST['prenom']." ".$_POST['age']." ".$_POST['profession']." ".$_POST['situation-familiale'];
			echo"<div class='tranche'>";
			echo "Tranche d'âge 20-30ans: ";
			echo" </div> ";
			echo"<div class='tranche'>";
			echo "Tranche d'âge 10-20ans: ";
			echo" </div> ";
		}
		echo" </div> ";
		?>
	</body>
</html>