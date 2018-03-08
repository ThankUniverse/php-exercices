<!DOCTYPE html>
<html>
<head>
	<title>exo-variable</title>
</head>
<body>
	<?php 
		$mon_prenom = 'Michaël';
		$mon_age = 33;
		$faim = true;
		$couleur_yeux = 'brun-vert';
		$ma_famille = ['Michaël', 'Lily', 'Eva-Phoenix'];

		//Exo-condition
		$temperature = 9;
		if($temperature >= 15){
			echo 'Il fait bon dehors';
		}
		elseif($temperature <= 10){
			echo 'Ne sors pas de chez toi !';
		}
	?>



</body>
</html>