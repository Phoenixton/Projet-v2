<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Traitement de l'article</title>
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
					if($_POST["resume"]==""||$_POST["pseudo"]==""||$_POST["date"]==""||$_POST["game"]==""||$_POST["titre"]==""||$_POST["tag"]==""||$_POST["texte"]==""||$_POST["choice"]=="") {
						return false;
					} 
					return true;
				}

				function insert_from_post($collec) {
					if(champsPleins()) {
						$_POST["adresse"]=$_POST["titre"].".php"; 
						$_POST["tag"]=explode(",", $_POST["tag"]);
						$collec->insert($_POST);
						if($collec==$reviews) {
							$newPage=fopen(../reviews/$_POST["adresse"], 'w+');
						} else {
							$newPage=fopen(../news/$_POST["adresse"], 'w+');
						}
							$tags="";
							foreach($_POST["tag"] as $k=>$v) {
								$tags=$tags." <a href=\"../recherche/rechercheTag.php?tag=".$v."\">#".$v."</a>";
							}
							//$texte contient tout le html et php de la page qu'on va créer
							$texte="<!DOCTYPE html>
												<html lang=\"fr\">
													<head>
														<meta charset=\"utf-8\">
														<title>".$_POST["titre"]."</title>
														<link rel=\"stylesheet\" href=\"../style.css\">
														<style>
															body {
																background-color: white;
																background-image: url(../imgpages/farcry_background.png);
															}
															#essai {
																margin: 15px;
																/*width:200px;*/
															}
															.essai {
																padding: 15px;
															}
															.essai2 li{
																border:solid 1.5px;
																box-shadow:1px 1px 5px black;
															}
															h1 {
																background-image: linear-gradient(#e74c3c, #000000);
															}
															h3 {
																background-image: linear-gradient(#e74c3c, #000000);
															}
														</style>
													</head>
													<body>
														<div class=\"row\"> 
															<div class=\"col-1\">
																<div class=\"content\">
																	<p>some text...</p>
																</div>
															</div>
															<?php
																include('../structure/menu.php');
															?>
															<div class=\"inscript_page\">
																<a href=\"../essaiInscription.php\"> S'inscrire </a> <a href=\"#\"> Connexion </a>
															</div>
															<?php
																include('../structure/barre_tests.php');
																include('../structure/fonctions.php');
																titre('".$_POST["titre"]."');
															?>
															<div class=\"news\">
																<p>".$_POST["texte"]."</p>
															</div>
															<div class=\"trucs\">".$_POST["pseudo"].", ".$_POST["date"]."<br>".$tags."</div>
														</div>
														<div class=\"row\">
															<?php 
																debut_comm_pdb();
																include('../structure/comments.php');
																end_comm();
															?>
														</div>
 													</body>
												</html>";
							fwrite($newPage, $texte);
							fclose($newPage);
						}
					} else {
						echo "Vous n'avez pas rempli tous les champs, veuillez <a href=\"submitReview.php\">réessayer</a>."
					}
				}

				if($_POST["choice"]=="review") {
					insert_from_post($reviews);
					header(location: '../reviews'.$_POST["adresse"]);
				} else if($_POST["choice"]=="news") {
					insert_from_post($news);
					header(location: '../news'.$_POST["adresse"]);
				}

			?>
		</p>
	</body>
</html>