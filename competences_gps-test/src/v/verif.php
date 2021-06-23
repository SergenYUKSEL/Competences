<?php

	/*************************
	*  Page: espace-membre.php
	*  Page encodée en UTF-8
	**************************/

session_start();//session_start() combiné à $_SESSION (voir en fin de traitement du formulaire) nous permettra de garder le pseudo en sauvegarde pendant qu'il est connecté, si vous voulez que sur une page, le pseudo soit (ou tout autre variable sauvegardée avec $_SESSION) soit retransmis, mettez session_start() au début de votre fichier PHP, comme ici
if(!isset($_SESSION['pseudo'])){
	header("Refresh: 5; url=connexion.php");//redirection vers le formulaire de connexion dans 5 secondes
	echo "Vous devez vous connecter pour accéder à l'espace membre.<br><br><i>Redirection en cours, vers la page de connexion...</i>";
	exit(0);//on arrête l'éxécution du reste de la page avec exit, si le membre n'est pas connecté
}
$Pseudo=$_SESSION['pseudo'];//on défini la variable $Pseudo (Plus simple à écrire que $_SESSION['pseudo']) pour pouvoir l'utiliser plus bas dans la page

//on se connecte une fois pour toutes les actions possible de cette page:
$mysqli=mysqli_connect('localhost','root','password','membres');//'serveur','nom d'utilisateur','pass','nom de la table'
if(!$mysqli) {
	echo "Erreur connexion BDD";
	//Dans ce script, je pars du principe que les erreurs ne sont pas affichées sur le site, vous pouvez donc voir qu'elle erreur est survenue avec mysqli_error(), pour cela décommentez la ligne suivante:
	//echo "<br>Erreur retournée: ".mysqli_error($mysqli);
	exit(0);
}

//on récupère les infos du membre si on souhaite les afficher dans la page:
$req=mysqli_real_query($mysqli,"SELECT * FROM membres WHERE pseudo='$Pseudo'");
$info=mysqli_fetch_assoc($req);
?>