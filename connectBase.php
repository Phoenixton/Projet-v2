<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>connectBase</title>
	</head>
	<body>
		<?php
			require_once '../mongo/fic568fic.php';
			$url = 'mongodb://'.DBUSER.':'.DBPASSWD.'@'.DBSERVER.'/'.DBNAME;
			$m = new MongoClient($url);
		?>
	</body>
</html>
