<?php
	if (!isset($_SESSION['co'])) {
		echo "<div id=\"inscription\">
						<form action=\"inserer.php\" method=\"POST\">
							<label for=\"pseudo\">Votre pseudonyme</label>
							<input type=\"text\" name=\"pseudo\" onblur=\"checkPseudo(this);\">
							<label for=\"mdp\">Votre mot de passe</label>
							<input type=\"password\" name=\"mdp\" id=\"mdp\">
							<label for=\"mdp2\">Veuillez retaper votre mot de passe</label>
							<input type=\"password\" name=\"mdp2\" onblur=\"checkMdp(document.getElementById('mdp').value, this);\">
							<label for=\"email\">Votre email</label>
							<input type=\"email\" name=\"email\">
							<input type=\"submit\" value=\"Inscription\">
						</form>
					</div>";
		echo "<div id=\"connexion\">
						<form action=\"verifier.php\"method=\"POST\">
							<label for=\"pseudo\">Pseudo</label>
							<input type=\"text\" name=\"pseudo\">
							<label for=\"mdp\">Mot de passe</label>
							<input type=\"password\" name=\"mdp\">
							<input type=\"submit\" value=\"Connexion\">
						</form>
					</div>";
	} else {
		echo "<div id=\"connecte\">
						<p>Bonjour ".$_SESSION['pseudo']."!<br><a href=\"compte.php\">Informations du compte</a><br>
						<a href=\"deconnexion.php\"><input type=\"submit\" value=\"Déconnexion\"></a>
						</p>
						
					</div>";
	} 
?>
