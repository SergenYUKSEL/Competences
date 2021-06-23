<?php session_start ();?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Changement de votre mot de passe :</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/competences.css">
    <script src="script.js"></script>
    </head>
<?php 
$mysql = mysqli_connect('localhost','root','password','competences');
$sql = mysqli_query($mysql, "SELECT mdp, id_utilisateur, nom FROM utilisateur");
while ($row = mysqli_fetch_array($sql))
{
    $id_utilisateur = $row['id_utilisateur'];
    $nom = $row['nom'];
    $new_mdp = sha1($_POST['new_mdp']);
    $new_mdp2 = sha1($_POST['new_mdp2']);
    $new_mdp = sha1($new_mdp);
    $update_mdp = "UPDATE utilisateur set mdp='$new_mdp', confirm_mdp='$new_mdp' where id_utilisateur=$id_utilisateur'";
    if(!empty($_POST['new_mdp']) AND (!empty($_POST['new_mdp2'])))
    {
        
        if ($new_mdp == $new_mdp2) {
                $insert_new_mdp = $bdd->prepare("INSERT INTO utilisateur(password) VALUES(?)");
                $insert_new_mdp->execute(array($new_mdp));
              }
              else
              {
                  echo("Vos mot de passe ne correspondent pas !");
              }

    }
    else 
    {
        if ($new_mdp == $new_mdp2) {
                $insert_new_mdp = $bdd->prepare("UPDATE  utilisateur(password) VALUES(?)");
                $insert_new_mdp->execute(array($new_mdp));
              }
              else
              {
                  echo("Vos mot de passe ne correspondent pas !");
              }

    }
}

?>
<body>
<form method ="POST" action="">
    <table>
        <tr>
            <td>
                <label for="new_mdp"> Nouveau mot de passe : </label>
            </td>
            <td>
                <input type="password" placeholder="Votre nouveau mot de passe" id="new_mdp" name="new_mdp">
            </td>
        </tr>
        <tr>
            <td>
                <label for="new_mdp2"> Confirmer votre nouveau mot de passe : </label>
            </td>
            <td>
                <input type="password" placeholder="Confirmer votre nouveau mot de passe" id="new_mdp2" name="new_mdp2">
            </td>
            <td>
            <br><br>
            <input type="submit" value="valider">
            </td>
        </tr>
    </table>
