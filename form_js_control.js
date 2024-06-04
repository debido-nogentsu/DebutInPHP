// JavaScript Document Validant le formulaire de la page4
// d'après les recommandations du World Wide Web Consortium
function RecommandationW3C() {
	let nom = document.forms["Connexion"]["nom"]; // récupération des données du formulaire que l'on place dans des variables
	let password = document.forms["Connexion"]["password"];
	
    // le nom n'est pas saisie
	if (nom.value == "") {
	alert("Veuillez saisir un nom de connexion !");
	nom.focus();
	return false;
	}
	
    // si le password n'est pas saisi
	if (password.value == "") {
	alert("Veuillez saisir un mot de passe !");
	password.focus();
	return false;
	}
}