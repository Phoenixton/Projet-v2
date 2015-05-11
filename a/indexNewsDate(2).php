<!DOCTYPE html>

<html lang="fr">


<head>
	<meta charset="utf-8">
	
	<title>Navigation Bar</title>
	
	<link rel="stylesheet" href="../style.css">
	<style>
	body {
	background-color: white;
	background-image: url(../imgpages/monokuma.png);
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
	</style>
</head>

<body>
	<div class="row"> 
	
	<?php
	include('../structure/menu.php'); ?>
	<br>
	<br>
	<?php
	include('../structure/barre_tests.php');
	include('../structure/fonctions.php');
	titre('News');
	?>

	<?php
		require_once '../connectBase.php';
		$db=$m->nsafar89;
		$news=$db->news;

		$query=array();
		$request=$news->find($query);

		foreach($request as $k=>$v) {
			echo "<tr>
							<td class=\"colTitre\">".$v["titre"]."</td>
							<td class=\"colPseudo\">".$v["pseudo"]."</td>
							<td class=\"colDate\">".$v["date"]."</td>
							<td class=\"colResume\">".$v["resume"]."</td>
						</tr>";
		}

	?>
	
	
	
</body>

</html>    
	


