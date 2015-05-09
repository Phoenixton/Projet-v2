<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Traitement de la review</title>
	</head>
	<body>
		<p>
			<?php
				session_start();
				require_once '../connectBase.php';
				$db=$m->nsafar89;
				$reviews=$db->reviews;
				$news=$db->news;

				function champsPleins() {
					if($_POST["pseudo"]==""||$_POST["date"]==""||$_POST["game"]==""||$_POST["titre"]==""||$_POST["tag"]==""||$_POST["texte"]==""||$_POST["choice"]=="") {
						return false;
					} 
					return true;
				}

				function insert_from_post($collec) {
					if(champsPleins()) {
						$_POST["adresse"]=$_POST["titre"].".php";
						$collec->insert($_POST);
					} else {
						echo "Vous n'avez pas rempli tous les champs, veuillez <a href=\"submitReview.php\">réessayer</a>."
					}
				}

				if($_POST["choice"]=="review") {
					insert_from_post($reviews);
				} else if($_POST["choice"]=="news") {
					insert_from_post($news);
				}

			?>
		</p>
	</body>
</html>