function champsPleins(champ, message) {
	if(champ.value.length==0) {
		document.getElementById(message).style.visibility='visible';
	} else {
		document.getElementById(message).style.visibility='hidden';
	}
}

function deuxChampsPleins(champ1, champ2, message) {
	if(champ1.value==false && champ2.value==false) {
		document.getElementById(message).style.visibility='visible';
	} else {
		document.getElementById(message).style.visibility='hidden';
	}
}