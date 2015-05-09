function checkPseudo(champ) {
	if(champ.value.length<3||champ.value.length>20) {
		alert('Attention votre pseudo doit faire entre 3 et 20 caractères!');
		return false;
	}
	return true;
}
function checkMdp(champ1, champ2) {
	var mdp1=champ1.value;
	var mdp2=champ2.value;
	if(mdp1!=mdp2) {
		alert('Attention, vos deux mots de passe ne sont pas identiques.');
		return false;
	}
	return true;
}
