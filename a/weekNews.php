<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>News de la semaine</title>
	</head>
	<body>
		<p>
			<?php
				session_start();
				require_once '../connectBase.php';
				$db=$m->nsafar89;
				$news=$db->news;

				$w=date('W');
				$query=array("week"=>$w);
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
		</p>
	</body>
</html>