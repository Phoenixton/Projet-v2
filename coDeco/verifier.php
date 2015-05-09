<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Vérification du compte</title>
	</head>
	<body>
		<?php
			session_start();
			require_once '../connectBase.php';
			$db=$m->nsafar89;
			$gens=$db->gens;
			
			function verif_and_co($collec) {
				$query1=array("pseudo"=>$_POST["pseudo"]);
				$request1=$collec->find($query1);
				$b1=false;
				foreach($request1 as $k) {
					$b1=true;
				}
				$query2=array("mdp"=>$_POST["mdp"]);
				$request2=$collec->find($query2);
				$b2=false;
				foreach($request2 as $k) {
					$b2=true;
				}
				if($b1&&$b2) {
					$_SESSION['co']=true;
					$_SESSION['pseudo']=$_POST["pseudo"];
					header ('location: ../accueil.php');
				} else {
					echo 'Pseudo ou mot de passe invalide, veuillez réessayer.';
					include 'connexion.php';
				}
			}
			
			verif_and_co($gens);
		?>
	</body>
</html>
