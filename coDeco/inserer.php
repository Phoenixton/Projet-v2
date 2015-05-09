<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>inserer</title>
		<meta charset="utf-8">
	</head>
	<body>
		<p>
			<?php
			require_once '../connectBase.php';
			$db=$m->nsafar89;
			$gens=$db->gens;
			
			function champsPleins() {
				if($_POST["pseudo"]==""||$_POST["mdp"]==""||$_POST["mdp2"]==""||$_POST["email"]=="") {
					return false;
				} 
				return true;
			}
			
			function is_in_collection($collec) {
				$query1=array("pseudo"=>$_POST["pseudo"]);
				$request1=$collec->find($query1);
				$b1=false;
				foreach($request1 as $k) {
					$b1=true;
				}
				$query2=array("email"=>$_POST["email"]);
				$request2=$collec->find($query2);
				$b2=false;
				foreach($request2 as $k) {
					$b2=true;
				}
				return $b1||$b2;
			}
			
			function insert_from_post($collec) {
				if(!is_in_collection($collec)) {
					if(champsPleins()) {
						$collec->insert($_POST);
						echo "Vous avez bien été inscrit.<br><a href=\"../accueil.php\">Retour à l'accueil</a>";
					} else {
						echo "Vous n'avez pas rempli tous les champs, veuillez réessayer.";
						include 'connexion.php';
					}
				} else {
					echo "Votre pseudonyme ou votre email est déjà utilisé.";
					include 'connexion.php';
				}
			}
			
			insert_from_post($gens);
			
			?>
		</p>
	</body>
</html>
						
