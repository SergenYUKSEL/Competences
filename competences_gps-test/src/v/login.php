<?php session_start();?>
<!doctype html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="script.js"></script>
    </head>
    <body>

<?php if(isset($_SESSION['id_EGNOM'])){
	echo "Vous êtes déjà connecté, vous pouvez accéder à l'espace membre en <a href='comp.php'>cliquant ici</a>.";
} else {
echo'
		<br>
		<h1 class="logintitle">Portfolio SIO</h1>
		<div class="login">
			<form action="identification.php" method="post">
				<label for="loginID">Identifiant</label><br>
				<input class="logininput" type="text" id="loginID" placeholder="Votre ID" name="loginID" required><br>
				<label for="password">Mot de passe</label><br>
				<input class="logininput" type="password" id="password" placeholder="Votre Mot de passe" name="password" required><br>
				<br>
				<input class="submitbutton" type="submit"  class="bouton" value="Entrer">
			</form>
		</div>';
}
?>
    </body>
</html>
  