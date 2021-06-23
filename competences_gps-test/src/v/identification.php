<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=competences;charset=utf8', 'root', 'password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exeption $e)
{
        die('Erreur : ' .$e->getMessage());
}

$identifiant = $_POST['loginID'];
$mdp = $_POST['password'];

$req = $bdd->prepare('SELECT nom, prenom, mdp, type_compte FROM utilisateur WHERE nom = ?');
$req->execute(array($identifiant));

while ($donnees = $req->fetch()){
    $nomUserBDD= $donnees['nom'];
    $prenomUserBDD =$donnees['prenom'];
    $pwdBDD = $donnees['mdp'];
    $tdcBDD = $donnees['type_compte'];
}

$req->closeCursor();

if (isset($_POST['loginID']) AND isset($_POST['password']))
{
    if ($mdp === $pwdBDD) {
        session_start();
        $_SESSION['nom'] = $identifiant;
        $_SESSION['nom_user'] = $nomUserBDD;
        $_SESSION['prenom_user'] =$prenomUserBDD;
        $_SESSION['type_compte'] = $tdcBDD;

        if ($_SESSION['type_compte']== 'collaborateur') {
            if (isset($_COOKIE['pageAccueil'])){
                header("Location:".$_COOKIE['pageAccueil'].".php");
            }
            else {
                header('Location: creation_situation.php');
            }
        }
        elseif ($_SESSION['type_compte']== 'admin') {
            header("Location: rh.php");
        }
        else {
            echo 'aucun type de compte';
        }
    }
    else {
        echo 'mauvais mot de passe ou indentifiant';
    }
}
else {
    echo 'aucun identifiant ou mot de passe';
}

?>