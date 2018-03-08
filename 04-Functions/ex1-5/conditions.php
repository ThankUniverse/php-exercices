<!DOCTYPE html>
<html>
<head>
	<title>conditions-exo</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$chambre_est_sale = true;
		$niveau_de_salete = 'moyenne'; //Moyen, dégoutante, ou immaculée
	
		if ($chambre_est_sale == true AND $niveau_de_salete === 'dégoutante')
		 {
			echo 'Range ta chambre espèce d\' immonde petit porc puant !! Elle est '.$niveau_de_salete;

		} elseif ($chambre_est_sale == true AND $niveau_de_salete == 'moyenne') {
			echo 'Bon, tu as une heure pour ranger ta chambre vu la qualitée '.$niveau_de_salete.' de ta chambre ! ';

		} elseif ($chambre_est_sale == false) {
			echo 'Ta chambre est trop propre, vis un peu!';

		
		
		} elseif ($chambre_est_sale == false AND $niveau_de_salete == 'immaculée') {
			echo 'Ta chambre est '.$niveau_de_salete.'félicitations !'; 
		} else {
			echo 'N\'essaie pas de nous flouer a raconter n\'importe quoi ! Petit *#?!';
		}
	?>
</body>
</html>