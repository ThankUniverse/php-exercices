<!DOCTYPE html>
<html>
<head>
	<title>Exo-heures</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$heures = 9;
		$minutes = 00;
		$minutesMin = 00;
		$minutesMax = 59;
		$message_du_jour = '';

		function valeur_minutes(range_minutes){
			return $minutes = 
		}

		if ($heures > 5 AND $heures < 9) {
				echo "Bonjour !";
			}
		elseif ($heures == 9 AND $minutes == 00) {
				echo "Bonjour !";
			}
		elseif ($heures > 9 AND $heures < 12) {
				echo "Bonne journée !";
			}
		elseif ($heures == 12 AND $minutes == 00) {
				echo "Bonne Journée !";
			}
		elseif ($heures > 12 AND $heures <16) {
				echo "Bon après-midi !";
			}
		elseif ($heures == 16 AND $minutes == 00) {
				echo "Bon après-midi !";
			}
		elseif ($heures > 16 AND $heures < 21) {
				echo "Bonne soirée !";
			}
		elseif ($heures == 21 AND $minutes == 00) {
				echo "Bonne soirée !";
			}
		elseif ($heures > 21 AND $heures < 23) {
				echo "Bonne nuit !";
			}
		elseif ($heures > 23 AND $heures < 24) {
				echo "Bonne nuit !";
			}
	?>
</body>
</html>