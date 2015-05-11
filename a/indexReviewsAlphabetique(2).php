<?php
session_start();
?>

<!DOCTYPE html>

<html lang="fr">


<head>
		<meta charset="utf-8">
		
		<title>Navigation Bar</title>
		
		
		<link rel="stylesheet" href="../style.css">
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
		<div class="row"> 
		<div class="col-1">
		<div class="content">
		
		<p>some text...</p>
		</div>
		</div>
		<?php
		include('../structure/menu.php'); ?>
		
		<?php
		include('../structure/barre_tests.php');
		include('../structure/fonctions.php');
		
		
		titre("Toutes les reviews");
		?>  

		<?php
				require_once '../connectBase.php';
				$db=$m->nsafar89;
				$reviews=$db->reviews;

				$query=array();
				$request=$reviews->find($query);

				function byLetter($letter) {
					foreach($request as $k=>$v) {
						if($letter==substr($v["game"], 0, 1)) {
							echo "<tr>
											<td class=\"colJeu\">".$v["jeu"]."</td>
											<td class=\"colPseudo\">".$v["pseudo"]."</td>
											<td class=\"colDate\">".$v["date"]."</td>
										</tr>";
						}
					}
				}

				function newsByLetter($letter) {
					$text=byLetter($letter);
					echo "<div class=\"news\">
									<div class=\"row\">
										<div class=\"col-2\">
											A".$text."
										</div>
									</div>
								</div>";
				}
			?>

		<div class=\"box-cont\">
			<h2> Bonjour </h2>"

			<?php
				for($i='A'; $i<='Z'; $i++) {
					newsByLetter($i);
					if($i=='Z'){
						break;
					}
				}

				for($i='0'; $i<='9'; $i++) {
					newsByLetter($i);
					if($i=='9'){
						break;
					}
				}				
			?>
 </div>    
 </body>
<!--remonter page-->
</html>
