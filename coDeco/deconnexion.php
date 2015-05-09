<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Vérification du compte</title>
	</head>
	<body>
		<?php
			session_start();
			$_SESSION=array();
			session_destroy();
			header ('location: ../accueil.php');
		?>
	</body>
</html>
